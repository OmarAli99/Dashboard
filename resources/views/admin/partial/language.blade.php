   <?php
             $locale = LaravelLocalization::getCurrentLocale() == 'ar' ? 'en' : 'ar';
            ?>
            <a class="nav-link text-muted my-2" href="{{LaravelLocalization::getLocalizedURL($locale)}}" id="langugeSwitcher">
              {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'English' : 'العربية'  }}
            </a>