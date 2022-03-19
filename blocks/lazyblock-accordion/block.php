<?php
/**
 * Card Template
 *
 * @var  array  $attributes Block attributes.
 * @var  array  $block Block data.
 * @var  string $context Preview context [editor,frontend].
 */

?>

<div class="space-y-4">
<?php foreach( $attributes['repeater'] as $inner ): ?>
  <details class="group" closed>
    <summary
      class="flex items-center justify-between p-4 rounded-lg cursor-pointer bg-gray-50"
    >
      <h2 class="font-medium"><?php echo $inner['question']; ?></h2>

      <svg
        class="w-5 h-5 transition-transform duration-300 group-open:-rotate-180"
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor"
      >
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          d="M19 9l-7 7-7-7"
        />
      </svg>
    </summary>

    <div class="px-4 mt-4">
      <p class="leading-relaxed text-gray-700">
      <?php echo $inner['answer']; ?>
      </p>
    </div>
  </details>
  <?php endforeach; ?>
</div>
