<?php
class Home extends Controller {
    public function index(): void {
        $this->render('layouts/main', [
            'page_title'       => 'Srinivasa Catering Services | Traditional Brahmin Vegetarian Catering in Hyderabad',
            'meta_description' => 'Authentic Brahmin-style vegetarian catering services in Hyderabad. Traditional homemade food, curry orders, poojas, housewarming functions, weddings, and events up to 200 guests.',
            'meta_keywords'    => 'Brahmin Catering Hyderabad, Pure Veg Catering Hyderabad, Traditional Catering Hyderabad, Curry Orders Hyderabad, Satyanarayana Vratham Catering, Vegetarian Catering Uppal, Homemade Food Hyderabad',
            'canonical_url'    => 'https://srinivasacateringservices.in/',
        ]);
    }
}
