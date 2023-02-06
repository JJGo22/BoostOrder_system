<template #list="slotProps">
	<div class="col-12">
        <div class="car-details">
            <div class="col">
                <img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/IMG_logo_%282017%29.svg" style="width:100px;height:100px;"/>
                <div class="grid">
                    <div class="col-12">Vin:</div>
                    <div class="col-12">Year:</div>
                    <div class="col-12">Brand: </div>
                    <div class="col-12">Color: blue</div>
                </div>
            </div>
            <Button icon="pi pi-search"></Button>
        </div>
    </div>
</template>

<script>
import DataView from 'primevue/dataview';


  export default {
      name: 'HelloVue'
  }
</script>