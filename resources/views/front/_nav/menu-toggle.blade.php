<button class="menu-button focus:outline-none md:ml-auto" role="button" aria-label="open navigation menu">
    <span class="menu-button__bar"></span>
    <span class="menu-button__bar"></span>
    <span class="menu-button__bar"></span>
</button>

@push('scripts')
<script>
    const menu = document.getElementById('js-nav-menu');
    const menuButton = document.querySelector('.menu-button');
    const accordionButton = document.getElementById('accordionButton');
    const accordionList = document.getElementById('accordionList');
    const mainContent = document.getElementById('main-content');

    menuButton.addEventListener('click', ()=>{
        menu.classList.toggle('hidden')
        menuButton.classList.toggle('is-active')
        mainContent.classList.toggle('hidden')
    })

    accordionButton.addEventListener('click', ()=>{

        accordionButton.classList.toggle('rotate-90')
        accordionList.classList.toggle("hidden");

    })


</script>
@endpush
