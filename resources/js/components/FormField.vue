<template>
  <default-field :field="field" :errors="errors">
    <template slot="field">
      <div class="py-2">
        <vue-slider
          ref="slider"
          v-model="value"
          :tooltip="field.tooltip || 'always'"
          :tooltip-placement="field.placementShow || 'top'"
          :formatter="field.formatter || null"
          :min="field.min"
          :max="field.max"
          :interval="field.interval"
        ></vue-slider>
      </div>
    </template>
  </default-field>
</template>

<script>
import { FormField, HandlesValidationErrors } from 'laravel-nova'
import VueSlider from 'vue-slider-component'

export default {
  components : {
    VueSlider
  },

  mixins : [FormField, HandlesValidationErrors],

  props : ['resourceName', 'resourceId', 'field'],

  methods : {
    /*
     * Set the initial, internal value for the field.
     */
    setInitialValue()
    {
      this.value = this.field.value || 0
    },

    /**
     * Fill the given FormData object with the field's internal value.
     */
    fill(formData)
    {
      formData.append(this.field.attribute, this.value || 0)
    },

    /**
     * Update the field's internal value.
     */
    handleChange(value)
    {
      this.value = value
    },
  },
}
</script>
