<template>

  <div class="container p-5">

    <div style="text-align:right;padding: 20px;" @click="showCartItem()">
      <i class="fa fa-shopping-cart fa-2x" aria-hidden="true" style="cursor:grab;"></i>
      <span> {{ product_count }}</span>
    </div>
    
    <div class="row row-cols-1 row-cols-md-3 g-4">

          <div class="col" v-for="(l,index,k) in productList">
            <div class="card">
              <template v-for="(l1) in l.images">
                <img :src="l1.src" class="card-img-top h-25" style="max-height: 350px;height:350px !important;">
              </template>
              
              <div class="card-body">
                <h5 class="card-title">{{l.name}}</h5>
                <p class="card-text">{{l.description}}</p>
              </div>
              <button @click="addToCart(l)" type="button" class="btn btn-primary">Order</button>
            </div>
          </div>

    </div>
  </div>
    
</template>


<script>


  export default {
      name: 'Product',
      data(){
        return {
            productList : [],
            product_count : 0,
            cartList : [],
        };
      },
      methods: {
        getProductListing(){
          let _this = this;
          window.axios.get('/getProductList')
          .then(function (r) {
            _this.productList = r.data;
          });
            
        },
        addToCart(data){
          this.product_count++;
          this.cartList.push(data);
        },
        showCartItem(){
          let msg = 'You have ' + this.cartList.length + ' item in your shopping cart.';
          alert(msg)
        },
      },
      created(){
        this.getProductListing();
      },
  }
</script>
