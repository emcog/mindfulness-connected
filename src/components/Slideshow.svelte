<script>
  let { products, lookInsideUrl } = $props();
  let current = $state(0);
</script>

<section id="slideshow-gallery">
  <a class="look-inside_button" href={lookInsideUrl} target="_blank" rel="noopener">
    <span>Look </span><span>inside &#8600;</span>
  </a>

  {#each products as product, i}
    <div class="product-photo" style:display={i === current ? 'block' : 'none'}>
      <a href={lookInsideUrl} target="_blank" rel="noopener" style="cursor: pointer;">
        <img src={product.img} alt={product.alt} style="width:100%" />
      </a>
    </div>
  {/each}

  <div class="slideshow__thumbnail-row">
    {#each products as product, i}
      <div class="slideshow__thumbnail-column">
        <img
          class="demo cursor"
          class:active={i === current}
          src={product.img}
          alt={product.alt}
          style="width:100%"
          onclick={() => (current = i)}
        />
      </div>
    {/each}
  </div>
</section>
