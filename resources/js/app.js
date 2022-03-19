import Alpine from 'alpinejs'
import collapse from '@alpinejs/collapse'
import intersect from '@alpinejs/intersect'
import persist from '@alpinejs/persist'
import focus from '@alpinejs/focus'

Alpine.plugin(focus)
Alpine.plugin(persist)
Alpine.plugin(intersect)
Alpine.plugin(collapse)

Alpine.start()
