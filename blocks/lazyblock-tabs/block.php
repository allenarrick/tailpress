<div
  x-data="{ activeTab: '<?php echo _wp_to_kebab_case($attributes['repeater'][0]['title']);?>' }"
  x-init="activeTab = window.location.hash ? window.location.hash.replace('#', '') : ''"
>

  <nav>
    <ul class="flex text-center border-b border-gray-200">
    
    <?php foreach( $attributes['repeater'] as $inner ): 
        $title = $inner['title'];
        $slug = _wp_to_kebab_case($title);
    ?>
    
      <li class="flex-1">
        <a
          @click="activeTab = '<?= $slug;?>'"
          :class="activeTab == '<?= $slug;?>' ? 'relative block p-4 text-sm font-medium bg-white border-t border-l border-r border-gray-200' : 'block p-4 text-sm font-medium text-gray-500'"
          href="#<?= $slug;?>"
        >
          <?php echo $title; ?>
        </a>
      </li>

    <?php endforeach; ?>
    </ul>
  </nav>

  <div class="p-6 border-b border-l border-r border-gray-200">
  <?php foreach( $attributes['repeater'] as $inner ): 
        $title = $inner['title'];
        $slug = _wp_to_kebab_case($title); ?>
    <div x-show="activeTab === '<?= $slug;?>'">
      <?= $inner['content']; ?>
    </div>
    <?php endforeach; ?>
    
  </div>
</div>
