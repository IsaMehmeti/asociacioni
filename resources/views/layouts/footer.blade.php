<div>

    <footer id="footer" class="bg-color-dark-scale-5 border border-right-0 border-left-0 border-bottom-0 border-color-light-3 mt-0">
        <div class="container text-center my-3 py-5">
            <a href="#" class="goto-top">
                <img src="img/lazy.png" data-plugin-lazyload data-plugin-options="{'threshold': 500}" data-original="/img/logo-light.png" width="102" height="45" class="mb-4 appear-animation" alt="Porto" data-appear-animation="fadeIn" data-appear-animation-delay="300">
            </a>
            <p class="font-weight-500 text-4 ls-0 mb-4">Website is exclusively develpoed by <a href="https://isamehmeti.com" class="text-color-light" target="_blank">Isa.</a></p>
            <ul class="social-icons social-icons-big social-icons-dark-2">
                <li class="social-icons-instagram"><a href="http://www.instagram.com/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                <li class="social-icons-youtube"><a href="http://www.youtube.com/" target="_blank" title="Youtube"><i class="fab fa-youtube"></i></a></li>
            </ul>
        </div>
        <div class="copyright bg-color-dark-scale-4 py-4">
            <div class="container text-center py-2">
                <p class="mb-0 text-2 ls-0">{{__('Copyright')}} &copy; <span id="date"></span> - {{__('All Rights Reserved')}}</p>

                <script>
                    var date = new Date().getFullYear();
                    document.getElementById('date').innerHTML = date;
                </script>
            </div>
        </div>
    </footer>
</div>
