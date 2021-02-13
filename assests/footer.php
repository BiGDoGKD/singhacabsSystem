
<script>
    const loader = document.querySelector('.loader');
    const main = document.querySelector('.container');

    function init() {
        setTimeout(() => {
            loader.style.opacity = 0;
            loader.style.display = 'none';

            main.style.display = 'block';
            setTimeout(() => (main.style.opacity = 1), 50);
        }, 2000);
    }

    init();
</script>
<script src="app.js" defer></script>
</body>

</html>