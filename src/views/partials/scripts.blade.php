<script>
    @if($allowCustomize)
        function customize()
        {
            const customizePanel = document.querySelector('.cookie-info-bar__modal-customize')
            customizePanel.style.display = customizePanel.style.display == "inline" ? "none" : "inline"
        }
    @endif
    @if($type === \Albertgpdev\CookieInfoBar::TYPE_BAR)    
        const elementToHide = document.querySelector('.cookie-info-bar__content')
    @else 
        const elementToHide = document.querySelector('.cookie-info-bar__modal-mask')
    @endif
    
    

    function editCookies()
    {
        document.querySelector('.cookie-info-bar__modal-mask').style.display = "inline"
        customize()
    }

    var btnAccept = document.querySelector('.cookie-info-bar__btn.btn--accept');
    var btnDeny = document.querySelector('.cookie-info-bar__btn.btn--deny');
    var btnSave = document.querySelector('.cookie-info-bar__btn.btn--save');
    btnAccept.addEventListener('click', async function() {
        const json = await fetch("{{ route('consent-cookies') }}?accepted=true")
            .then(response => {
                elementToHide.style.display = "none";
                @if($type == \Albertgpdev\CookieInfoBar::TYPE_BAR)
                    document.querySelector('.cookie-info-bar__modal-mask').style.display = "none";
                @endif                
            })
            .catch((e) => {});
    });

    btnDeny.addEventListener('click', async function() {
        const json = await fetch("{{ route('consent-cookies') }}?accepted=false")
            .then(response => {
                elementToHide.style.display = "none"
                @if($type == \Albertgpdev\CookieInfoBar::TYPE_BAR)
                document.querySelector('.cookie-info-bar__modal-mask').style.display = "none";
                @endif                
            })
            .catch((e) => {});
    });

     btnSave.addEventListener('click', async function(event) {
        event.preventDefault()
        var formData = new FormData(document.querySelector('.cookie-info-bar__form'))
        const data = [...formData.entries()];
        const asString = data
            .map(x => `${encodeURIComponent(x[0])}=${encodeURIComponent(x[1])}`)
            .join('&');
        const json = await fetch(`{{ route('consent-cookies') }}?${asString}`,)
            .then(response => {
                    elementToHide.style.display = "none";
                    @if($type == \Albertgpdev\CookieInfoBar::TYPE_BAR)
                    document.querySelector('.cookie-info-bar__modal-mask').style.display = "none";
                    @endif
                })
            .catch((e) => {});
        
    });
</script>
