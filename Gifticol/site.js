
        document.addEventListener('DOMContentLoaded', function () {
            // Toggle menu visibility
            var menuButton = document.querySelector('.block-all');
            var menuOps = document.querySelector('.block-ops');

            menuButton.addEventListener('click', function () {
                menuOps.classList.toggle('visible');
            });
        });

