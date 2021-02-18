<template>
  <panel-item :field="field">
    <template slot="value">
      <div class="flex items-center flex-wrap h-4">
        <div class="w-1/3">
          <vue-slider
            ref="slider"
            v-model="field.value"
            :dot-size="0"
            :disabled-style="{cursor: 'default', opacity: 1}"
            :disabled-dot-style="{cursor: 'default', display: 'none'}"
            :tooltip="field.tooltip || 'always'"
            :tooltip-placement="field.placementShow || 'top'"
            :formatter="field.formatter || null"
            disabled>
          </vue-slider>
        </div>
      </div>
    </template>
  </panel-item>
</template>

<script>
export default {
  props : ['resource', 'resourceName', 'resourceId', 'field'],
}
</script>
