<script>
  let { links } = $props();
  let isOpen = $state(false);
</script>

<button
  id="nav__mobile-button"
  class="nav__mobile-button"
  class:nav__mobile-button_is-active={isOpen}
  aria-expanded={isOpen}
  aria-controls="nav__mobile-contents"
  onclick={() => (isOpen = !isOpen)}
>
  Menu
</button>

<ul
  id="nav__mobile-contents"
  class="nav__mobile-contents"
  class:nav__mobile-contents_is-active={isOpen}
>
  {#each links as link}
    <li><a class="nav__link" href={link.url}>{link.page}</a></li>
  {/each}
</ul>
