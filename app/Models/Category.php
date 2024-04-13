<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'is_directory',
        'level',
        'path',
    ];

    protected $casts = [
        'is_directory' => 'boolean',
    ];

    protected static function boot()
    {
        parent::boot();
        
        // 监听 Category 的创建事件，用于初始化 path 和 level 字段值

        static::creating(function(Category $category){
            if(is_null($category->parent_id)){
                $category->level = 0;
                $category->path = '-';
            }else{
                $category->level = $category->parent->level + 1;
                $category->path  = $category->parent->path.$category->parent_id.'-';
            }
        });
    }

    public function children()
    {
        // that.parent_id = this.id
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function parent()
    {
        // 正 this.parent_id = that.id  // 正即 this 是当前行
        // 反 this.id = that.parent_id // 反即 this 是其他行  that 是"当前行" 在 belongsTo 语义中, 使用 反向
        // 所以这里就是 (class , parent_id , id) 不知道为什么这里可以省略
        return $this->belongsTo(Category::class);
        // 为什么不都用正向语义 , 比如 User hasMany Phone , Phone hasOne User 进行定义
    }

    public function p()
    {
        // this.parent_id = that.id
        return $this->hasMany(Category::class,'id','parent_id');
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    // 定义一个访问器，获取所有祖先类目的 ID 值
    public function getPathIdsAttribute()
    {
        // trim($str, '-') 将字符串两端的 - 符号去除
        // explode() 将字符串以 - 为分隔切割为数组
        // 最后 array_filter 将数组中的空值移除
        return array_filter(explode('-', trim($this->path, '-')));
    }

    // 定义一个访问器，获取所有祖先类目并按层级排序
    public function getAncestorsAttribute()
    {
        return Category::query()
            // 使用上面的访问器获取所有祖先类目 ID
            ->whereIn('id', $this->path_ids)
            // 按层级排序
            ->orderBy('level')
            ->get();
    }

    // 定义一个访问器，获取以 - 为分隔的所有祖先类目名称以及当前类目的名称
    public function getFullNameAttribute()
    {
        return $this->ancestors  // 获取所有祖先类目
                    ->pluck('name') // 取出所有祖先类目的 name 字段作为一个数组
                    ->push($this->name) // 将当前类目的 name 字段值加到数组的末尾
                    ->implode(' - '); // 用 - 符号将数组的值组装成一个字符串
    }

}
