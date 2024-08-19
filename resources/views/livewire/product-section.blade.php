<div class='px-10 md:px-20 sm:px-30 py-3'>
  <!-- Brand New  -->
  @include('components.navigation.view-all', [
      'Category' => 'Jamu 1',
  ])
  <livewire:product-listing :category_id="10" :current_product_id="0" />

  <!-- Smartphones & laptops  -->
  @include('components.navigation.view-all', [
      'Category' => 'Jamu 2',
  ])
  <livewire:product-listing :category_id="10" :current_product_id="0" />

  <!-- Outfits  -->
  @include('components.navigation.view-all', [
      'Category' => 'jamu 3',
  ])
  <livewire:product-listing :category_id="10" :current_product_id="0" />

</div>
