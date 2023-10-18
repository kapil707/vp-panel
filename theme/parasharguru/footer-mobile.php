            </div>
            <div class="col-sm-4">
            
            </div>
        </div>
    </div>
</div>
<script>
function menushow(){
    $(".mobile-left-menu").show();
}
function menuoff(){
    $(".mobile-left-menu").hide();
}
// Function to open a new window for sharing
function openShareWindow(url) {
    window.open(url, '_blank', 'width=600,height=400');
}

// Add event listeners to the buttons
document.getElementById('facebook-share').addEventListener('click', function() {
    const url = 'https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(window.location.href);
    openShareWindow(url);
});

document.getElementById('twitter-share').addEventListener('click', function() {
    const url = 'https://twitter.com/intent/tweet?url=' + encodeURIComponent(window.location.href);
    openShareWindow(url);
});

document.getElementById('linkedin-share').addEventListener('click', function() {
    const url = 'https://www.linkedin.com/shareArticle?url=' + encodeURIComponent(window.location.href);
    openShareWindow(url);
});

// jQuery(document).ready(function($) {
//     $('.social-share-button').on('click', function() {
//         var network = $(this).data('network');
//         var url = window.location.href;
        
//         if (network === 'facebook') {
//             window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(url), '_blank', 'width=600,height=400');
//         } else if (network === 'twitter') {
//             window.open('https://twitter.com/intent/tweet?url=' + encodeURIComponent(url), '_blank', 'width=600,height=400');
//         } else if (network === 'linkedin') {
//             window.open('https://www.linkedin.com/shareArticle?url=' + encodeURIComponent(url), '_blank', 'width=600,height=400');
//         }
//     });
// });
</script>