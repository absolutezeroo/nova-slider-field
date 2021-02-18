<template>
  <div class="py-2">
    <vue-slider
      ref="slider"
      v-model="field.value"
      :dot-size="0"
      :disabled-style="{cursor: 'default', opacity: 1}"
      :disabled-dot-style="{cursor: 'default', display: 'none'}"
      :tooltip="field.tooltip || 'always'"
      :tooltip-placement="field.placementShow || 'top'"
      :formatter="field.formatter || null"
      disabled
    >
    </vue-slider>
  </div>
</template>

<script>
import VueSlider from 'vue-slider-component'

export default {
  components : {
    VueSlider
  },

  props : ['resourceName', 'field'],
}
</script>
