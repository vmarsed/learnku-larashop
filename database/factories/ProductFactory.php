<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;


class ProductFactory extends Factory
{
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $image = $this->faker->randomElement([
            "https://images.unsplash.com/photo-1557180295-76eee20ae8aa?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8b2JqZWN0fGVufDB8fDB8fHww",
            "https://images.unsplash.com/photo-1459411552884-841db9b3cc2a?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8b2JqZWN0fGVufDB8fDB8fHww",
            "https://images.unsplash.com/photo-1563219996-45f1a0ba692e?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8b2JqZWN0fGVufDB8fDB8fHww",
            "https://images.unsplash.com/photo-1494232410401-ad00d5433cfa?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fG9iamVjdHxlbnwwfHwwfHx8MA%3D%3D",
            "https://plus.unsplash.com/premium_photo-1686917087297-97ef5ee6e9b3?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTd8fG9iamVjdHxlbnwwfHwwfHx8MA%3D%3D",
            "https://plus.unsplash.com/premium_photo-1678579267285-d562dc53e783?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjF8fG9iamVjdHxlbnwwfHwwfHx8MA%3D%3D",
            "https://images.unsplash.com/photo-1598300042247-d088f8ab3a91?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mjh8fG9iamVjdHxlbnwwfHwwfHx8MA%3D%3D",
            "https://plus.unsplash.com/premium_photo-1679513691641-9aedddc94f96?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDV8fG9iamVjdHxlbnwwfHwwfHx8MA%3D%3D",
            "https://images.unsplash.com/photo-1489824904134-891ab64532f1?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NTl8fG9iamVjdHxlbnwwfHwwfHx8MA%3D%3D",
            "https://plus.unsplash.com/premium_photo-1667506422352-32aec976293a?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NjF8fG9iamVjdHxlbnwwfHwwfHx8MA%3D%3D",
            "https://images.unsplash.com/photo-1501426026826-31c667bdf23d?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTAwfHxvYmplY3R8ZW58MHx8MHx8fDA%3D",
            "https://images.unsplash.com/photo-1652379644933-6d9958528033?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8MXw0ODk5MzU3fHxlbnwwfHx8fHw%3D",
            "https://images.unsplash.com/photo-1562362258-46de36d55cef?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8MzZ8NDg5OTM1N3x8ZW58MHx8fHx8",
            "https://images.unsplash.com/photo-1617582907226-c49e2d8200d9?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8NDl8NDg5OTM1N3x8ZW58MHx8fHx8",
            "https://images.unsplash.com/photo-1559854940-6388852c6c6b?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8NTZ8NDg5OTM1N3x8ZW58MHx8fHx8",
            "https://images.unsplash.com/photo-1707910072152-3ac1e8bec8aa?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8NjR8NDg5OTM1N3x8ZW58MHx8fHx8",
            "https://images.unsplash.com/photo-1681301969574-933d93cb85f3?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8NzR8NDg5OTM1N3x8ZW58MHx8fHx8",
            "https://images.unsplash.com/photo-1643234567681-b28137fb1c33?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8ODF8NDg5OTM1N3x8ZW58MHx8fHx8",
            "https://images.unsplash.com/photo-1697344103930-ebe557cd1b77?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8MTEyfDQ4OTkzNTd8fGVufDB8fHx8fA%3D%3D",
            "https://images.unsplash.com/photo-1655627617149-d811dc052d16?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8MTEzfDQ4OTkzNTd8fGVufDB8fHx8fA%3D%3D",
            "https://images.unsplash.com/photo-1627794463790-3d17ee099a35?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8MTMzfDQ4OTkzNTd8fGVufDB8fHx8fA%3D%3D",
            "https://images.unsplash.com/photo-1528825871115-3581a5387919?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8MTU5fDQ4OTkzNTd8fGVufDB8fHx8fA%3D%3D",
            "https://images.unsplash.com/photo-1516962126636-27ad087061cc?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8MTY1fDQ4OTkzNTd8fGVufDB8fHx8fA%3D%3D",
            "https://images.unsplash.com/photo-1639417735220-5fe98605ba82?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8MTk1fDQ4OTkzNTd8fGVufDB8fHx8fA%3D%3D",
            "https://images.unsplash.com/photo-1629911619975-2d613cbc7eac?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8MTk4fDQ4OTkzNTd8fGVufDB8fHx8fA%3D%3D",
            "https://images.unsplash.com/photo-1563396983906-b3795482a59a?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8MjAxfDQ4OTkzNTd8fGVufDB8fHx8fA%3D%3D",
            "https://images.unsplash.com/photo-1675084470941-e77642c5bf86?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8MjA3fDQ4OTkzNTd8fGVufDB8fHx8fA%3D%3D",
            "https://images.unsplash.com/photo-1593377201811-4516986cbe41?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8MjEyfDQ4OTkzNTd8fGVufDB8fHx8fA%3D%3D",
            "https://images.unsplash.com/photo-1580316008590-43d5fb8cc3cd?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8MjE0fDQ4OTkzNTd8fGVufDB8fHx8fA%3D%3D",
            "https://images.unsplash.com/photo-1560651921-94fb7af0e901?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8MjI5fDQ4OTkzNTd8fGVufDB8fHx8fA%3D%3D",
            "https://images.unsplash.com/photo-1429087969512-1e85aab2683d?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8MjQ4fDQ4OTkzNTd8fGVufDB8fHx8fA%3D%3D",
            "https://images.unsplash.com/photo-1607713274285-c983edd6b1fe?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8MjYzfDQ4OTkzNTd8fGVufDB8fHx8fA%3D%3D",
            "https://images.unsplash.com/photo-1464965911861-746a04b4bca6?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8Mjc5fDQ4OTkzNTd8fGVufDB8fHx8fA%3D%3D",
            "https://images.unsplash.com/photo-1543076659-9380cdf10613?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8MjgwfDQ4OTkzNTd8fGVufDB8fHx8fA%3D%3D",
            "https://images.unsplash.com/photo-1661793422829-e1f648ab4a15?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8Mjg4fDQ4OTkzNTd8fGVufDB8fHx8fA%3D%3D",
            "https://images.unsplash.com/photo-1554109394-7e351053be0d?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8MzA0fDQ4OTkzNTd8fGVufDB8fHx8fA%3D%3D",
            "https://images.unsplash.com/photo-1448043552756-e747b7a2b2b8?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8MTd8MTU1Njc5fHxlbnwwfHx8fHw%3D",
            "https://images.unsplash.com/photo-1448293065296-c7e2e5b76ae9?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8MzN8MTU1Njc5fHxlbnwwfHx8fHw%3D",
            "https://images.unsplash.com/photo-1545724149-1d8de3baa55c?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8ZG9sbHxlbnwwfHwwfHx8MA%3D%3D",
            "https://images.unsplash.com/photo-1612506001235-f0d0892aa11b?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8ZG9sbHxlbnwwfHwwfHx8MA%3D%3D",
            "https://images.unsplash.com/photo-1613135492018-73d6c13ab4a0?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fGRvbGx8ZW58MHx8MHx8fDA%3D",
            "https://images.unsplash.com/photo-1602734846297-9299fc2d4703?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTZ8fGRvbGx8ZW58MHx8MHx8fDA%3D",
            "https://images.unsplash.com/photo-1613626253486-e2d1d9fd9bc9?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTh8fGRvbGx8ZW58MHx8MHx8fDA%3D",
            "https://images.unsplash.com/photo-1584238832299-f37743d0bde8?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mjd8fGRvbGx8ZW58MHx8MHx8fDA%3D",
            "https://images.unsplash.com/photo-1580923368248-877f237696cd?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mzh8fGRvbGx8ZW58MHx8MHx8fDA%3D",
            "https://images.unsplash.com/photo-1619233985563-fcba75ff25a5?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mzl8fGRvbGx8ZW58MHx8MHx8fDA%3D",
            "https://images.unsplash.com/photo-1582845512747-e42001c95638?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8dG95fGVufDB8fDB8fHww",
            "https://images.unsplash.com/photo-1581235720704-06d3acfcb36f?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fHRveXxlbnwwfHwwfHx8MA%3D%3D",
            "https://images.unsplash.com/photo-1615486363973-f79d875780cf?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fHRveXxlbnwwfHwwfHx8MA%3D%3D",
            "https://images.unsplash.com/photo-1546776230-bb86256870ce?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fHRveXxlbnwwfHwwfHx8MA%3D%3D",
            "https://images.unsplash.com/photo-1593085512500-5d55148d6f0d?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fHRveXxlbnwwfHwwfHx8MA%3D%3D",
            "https://images.unsplash.com/photo-1508896694512-1eade558679c?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTZ8fHRveXxlbnwwfHwwfHx8MA%3D%3D",
            "https://plus.unsplash.com/premium_photo-1684586998453-6ad8c8115fcd?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjF8fHRveXxlbnwwfHwwfHx8MA%3D%3D",
            "https://images.unsplash.com/photo-1618842676088-c4d48a6a7c9d?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjN8fHRveXxlbnwwfHwwfHx8MA%3D%3D",
            "https://images.unsplash.com/photo-1586333237928-8b46d9d784bf?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjZ8fHRveXxlbnwwfHwwfHx8MA%3D%3D",
            "https://images.unsplash.com/photo-1560113562-a0a37ada6d91?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzJ8fHRveXxlbnwwfHwwfHx8MA%3D%3D",
            "https://images.unsplash.com/photo-1575364289437-fb1479d52732?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzR8fHRveXxlbnwwfHwwfHx8MA%3D%3D",
            "https://images.unsplash.com/photo-1549501602-52168bb8f653?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzV8fHRveXxlbnwwfHwwfHx8MA%3D%3D",
            "https://images.unsplash.com/photo-1594736797933-d0501ba2fe65?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDN8fHRveXxlbnwwfHwwfHx8MA%3D%3D",
            "https://plus.unsplash.com/premium_photo-1681488178364-bd965565837e?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDV8fHRveXxlbnwwfHwwfHx8MA%3D%3D",
            "https://images.unsplash.com/photo-1559715541-5daf8a0296d0?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDh8fHRveXxlbnwwfHwwfHx8MA%3D%3D",
            "https://images.unsplash.com/photo-1529016011223-8ee9873aef1d?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NTB8fHRveXxlbnwwfHwwfHx8MA%3D%3D",
            "https://images.unsplash.com/photo-1558877385-6fc9b25e3adf?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NTV8fHRveXxlbnwwfHwwfHx8MA%3D%3D",
            "https://images.unsplash.com/photo-1630549316063-7ae02749d2cc?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NTR8fHRveXxlbnwwfHwwfHx8MA%3D%3D",
            "https://images.unsplash.com/photo-1599025375515-f4db40413f0e?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NTZ8fHRveXxlbnwwfHwwfHx8MA%3D%3D",
            "https://images.unsplash.com/photo-1586458873452-7bdd7401eabd?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NjR8fHRveXxlbnwwfHwwfHx8MA%3D%3D",
            "https://images.unsplash.com/photo-1598541264502-84dc6aa2fb87?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Njh8fHRveXxlbnwwfHwwfHx8MA%3D%3D",
            "https://images.unsplash.com/photo-1515611309071-6cd7e12cace9?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NzB8fHRveXxlbnwwfHwwfHx8MA%3D%3D",
            "https://images.unsplash.com/photo-1565207192576-ce763be7da44?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NzF8fHRveXxlbnwwfHwwfHx8MA%3D%3D",
            "https://images.unsplash.com/photo-1592004604827-63bab259629f?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8ODN8fHRveXxlbnwwfHwwfHx8MA%3D%3D",
            "https://images.unsplash.com/photo-1579724186435-56a4bd84ab31?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8ODh8fHRveXxlbnwwfHwwfHx8MA%3D%3D",
            "https://images.unsplash.com/photo-1620447789324-fd300c136721?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OTR8fHRveXxlbnwwfHwwfHx8MA%3D%3D",
            "https://images.unsplash.com/photo-1581227202159-e5cb49f9fa08?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTA2fHx0b3l8ZW58MHx8MHx8fDA%3D",
            "https://images.unsplash.com/photo-1621944276209-ec3dc5136f4d?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTEwfHx0b3l8ZW58MHx8MHx8fDA%3D",
            "https://images.unsplash.com/photo-1605979399824-542335ee35d5?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTM0fHx0b3l8ZW58MHx8MHx8fDA%3D",
            "https://images.unsplash.com/photo-1549815587-9757d02af740?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTQ4fHx0b3l8ZW58MHx8MHx8fDA%3D",
            "https://images.unsplash.com/photo-1627561204953-5807b913dba0?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTY2fHx0b3l8ZW58MHx8MHx8fDA%3D",
            "https://images.unsplash.com/photo-1579537879996-4bf426329641?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTY3fHx0b3l8ZW58MHx8MHx8fDA%3D",
            "https://images.unsplash.com/photo-1489367874814-f5d040621dd8?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTcwfHx0b3l8ZW58MHx8MHx8fDA%3D",
            "https://images.unsplash.com/photo-1549145159-2f1242ce0975?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTc0fHx0b3l8ZW58MHx8MHx8fDA%3D",
            "https://images.unsplash.com/photo-1603356033288-acfcb54801e6?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTgzfHx0b3l8ZW58MHx8MHx8fDA%3D",
            "https://images.unsplash.com/photo-1589419621083-1ead66c96fa7?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTkxfHx0b3l8ZW58MHx8MHx8fDA%3D",
            "https://images.unsplash.com/photo-1529335764857-3f1164d1cb24?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTk2fHx0b3l8ZW58MHx8MHx8fDA%3D",
            "https://images.unsplash.com/photo-1604883781245-0aca44fff711?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjAzfHx0b3l8ZW58MHx8MHx8fDA%3D",
            "https://images.unsplash.com/photo-1565993545587-f0a82a0d09b9?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjEwfHx0b3l8ZW58MHx8MHx8fDA%3D",
            "https://images.unsplash.com/photo-1560859251-d563a49c5e4a?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjU4fHx0b3l8ZW58MHx8MHx8fDA%3D",
            "https://images.unsplash.com/photo-1598084414497-325282d2924b?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8MTZ8cVlSYmF5ZEItMjB8fGVufDB8fHx8fA%3D%3D",
            "https://images.unsplash.com/photo-1570619367330-f794786ab176?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8MjR8cVlSYmF5ZEItMjB8fGVufDB8fHx8fA%3D%3D",
            "https://images.unsplash.com/photo-1542779283-429940ce8336?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTI1fHx0b3klMjBtZWNoaW5lfGVufDB8fDB8fHww",
            "https://images.unsplash.com/photo-1640271443625-3276ed8f62b5?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTUwfHx0b3klMjBtZWNoaW5lfGVufDB8fDB8fHww",
            "https://images.unsplash.com/photo-1609845768806-767fcfc317b6?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fHBva2Vtb258ZW58MHx8MHx8fDA%3D",
            "https://images.unsplash.com/photo-1616196334218-caffdc9b2317?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fHBva2Vtb258ZW58MHx8MHx8fDA%3D",
            "https://images.unsplash.com/photo-1627421367074-0735f6ddc254?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fHNlZ2F8ZW58MHx8MHx8fDA%3D",
            "https://images.unsplash.com/photo-1700153849610-3e9d1030d791?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NzV8fHNlZ2F8ZW58MHx8MHx8fDA%3D",
            "https://plus.unsplash.com/premium_photo-1682125756282-cd88ba44089c?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8b2xkJTIwbWFjaGluZXxlbnwwfHwwfHx8MA%3D%3D",
            "https://images.unsplash.com/photo-1509330763532-3d47d138ec25?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTh8fG9sZCUyMG1hY2hpbmV8ZW58MHx8MHx8fDA%3D",
            "https://images.unsplash.com/photo-1598860024867-a1cb3a858427?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fGJydXNofGVufDB8fDB8fHww",

        ]);

        return [
            'title'        => $this->faker->word,
            'description'  => $this->faker->sentence,
            'image'        => $image,
            'on_sale'      => true,
            'rating'       => $this->faker->numberBetween(0, 5),
            'sold_count'   => 0,
            'review_count' => 0,
            'price'        => 0,
        ];
        



    }
}
