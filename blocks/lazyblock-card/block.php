<?php
/**
 * Card Template
 *
 * @var  array  $attributes Block attributes.
 * @var  array  $block Block data.
 * @var  string $context Preview context [editor,frontend].
 */

?>

<a
  class="block overflow-hidden border border-gray-100 rounded-lg shadow-sm "
  href="<?php echo esc_html( $attributes['link-url'] ); ?>"
>
  <img
    class="object-cover w-full h-56"
    src="<?php echo esc_html( $attributes['image']['url'] ); ?>"
    alt=""
  />

  <div class="p-6">
    <h5 class="text-xl font-bold">
    <?php echo esc_html( $attributes['title'] ); ?>
    </h5>

    <p class="mt-2 text-sm text-gray-500">
    <?php echo esc_html( $attributes['description'] ); ?>
    </p>

    <div
      class="inline-block pb-1 mt-4 font-medium text-blue-600 border-b border-blue-500 "
    >
        <?php echo esc_html( $attributes['link-text'] ); ?>
      <span aria-hidden="true">&rarr;</span>
    </div>
  </div>
</a>

