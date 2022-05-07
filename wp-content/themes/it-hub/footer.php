<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package IT_Hub
 */

?>

<footer class="grid">
    <div class="first"></div>
    <div class="logo">
        <?php the_custom_logo(); ?>
        <div class="logo-capture">
            <p>Всё самое новое из мира технологий</p>
        </div>

        <div class="social">
            <a href="" target="_blank" class="social__item social__item--vk">

                <svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <style>
                            .cls-1 {
                                fill: #4489c8;
                            }

                            .cls-2 {
                                fill: #fff;
                            }
                        </style>
                    </defs>
                    <title />
                    <g data-name="32-vk" id="_32-vk">
                        <rect class="cls-1" height="64" rx="11.2" ry="11.2" width="64" />
                        <path class="cls-2"
                              d="M9.62,19.77H17.3a.79.79,0,0,1,.74.51c.85,2.19,4.38,10.76,7.61,11.46,2.4,0,1.55-11.4-1.5-11.4-.8,0,1.42-1.42,1.57-1.48a16.38,16.38,0,0,1,8.66,0c1.53.64,1.79,2.43,1.83,3.95s-1.7,8,.59,8.7c3,.92,6.86-8.49,7.76-10.8a.79.79,0,0,1,.74-.5h8.55a.8.8,0,0,1,.74,1.11,74.74,74.74,0,0,1-6.31,11.52,1.59,1.59,0,0,0,.16,2C51,37.58,58,45.34,54,45.34H45.37a1.57,1.57,0,0,1-1.18-.53c-1.34-1.48-5.24-5.6-7-5.27-1.46.27-1.6,2.75-1.53,4.37a1.6,1.6,0,0,1-1.48,1.68c-1.53.09-3.62.13-3.81.12-6.1-.39-9.71-4.46-13.16-9A56.33,56.33,0,0,1,8.86,20.83.81.81,0,0,1,9.62,19.77Z" />
                    </g>
                </svg>
            </a>
            <a href="" target="_blank" class="social__item social__item--tg">

                <svg id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512"
                     xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <style type="text/css">
                    .st0 {
                        fill: #5EBEE1;
                    }

                    .st1 {
                        fill: #FFFFFF;
                    }
                </style>
                    <g>
                        <path class="st0"
                              d="M512,397.1c0,63.5-51.5,114.9-114.9,114.9H114.9C51.5,512,0,460.5,0,397.1V114.9C0,51.5,51.5,0,114.9,0h282.2   C460.5,0,512,51.5,512,114.9V397.1z" />
                        <path class="st1"
                              d="M383.1,134.1L116.3,238c-8.6,3.4-8.1,15.8,0.8,18.4l67.8,20l25.3,80.3c2.6,8.4,13.3,10.9,19.4,4.6l35.1-35.8   l68.8,50.5c8.4,6.2,20.4,1.6,22.5-8.6l45.5-217.8C403.8,139,393.3,130.1,383.1,134.1L383.1,134.1L383.1,134.1z M349.7,182.4   L225.8,292c-1.2,1.1-2,2.6-2.2,4.2l-4.8,42.4c-0.2,1.4-2.1,1.6-2.5,0.2l-19.6-63.3c-0.9-2.9,0.3-6,2.9-7.6l146.3-90.8   C349.2,175.2,352.7,179.8,349.7,182.4L349.7,182.4L349.7,182.4z" />
                    </g>
              </svg>
            </a>
            <a href="https://github.com/Pr0gger1/ITHub.github.io" target="_blank" class="social__item social__item--git">

                <svg fill="none" height="25" viewBox="0 0 25 25" width="25" xmlns="http://www.w3.org/2000/svg">
                    <path clip-rule="evenodd"
                          d="M15.7481 24.9471C24.0901 24.7061 24.9111 22.9501 24.9111 12.9811C24.9111 1.98108 23.9111 0.981079 12.9111 0.981079C1.91113 0.981079 0.911133 1.98108 0.911133 12.9811C0.911133 22.9761 1.73713 24.7151 10.1391 24.9491C10.2121 24.8581 10.2391 24.7441 10.2391 24.6281C10.2391 24.3781 10.2291 21.8121 10.2241 20.9291C7.18713 21.5681 6.54613 19.5101 6.54613 19.5101C6.04913 18.2881 5.33313 17.9621 5.33313 17.9621C4.34213 17.3061 5.40813 17.3191 5.40813 17.3191C6.50413 17.3941 7.08113 18.4101 7.08113 18.4101C8.05513 20.0271 9.63713 19.5601 10.2591 19.2891C10.3581 18.6061 10.6401 18.1391 10.9521 17.8751C8.52713 17.6081 5.97813 16.7001 5.97813 12.6451C5.97813 11.4901 6.40413 10.5461 7.10213 9.80608C6.98913 9.53808 6.61513 8.46208 7.20913 7.00608C7.20913 7.00608 8.12613 6.72108 10.2121 8.09008C11.0831 7.85508 12.0171 7.73808 12.9461 7.73408C13.8731 7.73808 14.8071 7.85508 15.6801 8.09008C17.7651 6.72108 18.6801 7.00608 18.6801 7.00608C19.2761 8.46208 18.9011 9.53808 18.7881 9.80608C19.4881 10.5461 19.9111 11.4901 19.9111 12.6451C19.9111 16.7101 17.3581 17.6051 14.9251 17.8661C15.3171 18.1931 15.6661 18.8391 15.6661 19.8261C15.6661 20.7721 15.6601 22.4451 15.6561 23.5541C15.6541 24.1031 15.6531 24.5131 15.6531 24.6281C15.6531 24.7371 15.6821 24.8521 15.7481 24.9471V24.9471Z"
                          fill="black" fill-rule="evenodd" />
                </svg>
            </a>
        </div>

        <div class="copyright">© ITHub <?php echo date('Y')?> - все права защищены</div>

    </div>
    <div class="subscribe">
        <?php
        $form_widget = new \MailPoet\Form\Widget();
        echo $form_widget->widget(array('form' => 1, 'form_type' => 'php'));
        ?>
    </div>
<!--    </div>-->
</footer>
</div>

<?php wp_footer(); ?>
<script type="text/javascript">
    jQuery(document).ready(function ($){
        $(".window").submit(function (event){
            event.preventDefault();

            let email = $("#email").val();
            let name = $("#name").val();
            let message = $("#congrat").val();

            $(".err").html("");
            $.ajax({
                type: "POST",
                url: '<?php echo admin_url("admin-ajax.php") ?>',
                data: {
                    "email" : email,
                    "name"  : name,
                    "message": message,
                    action: 'ajax_form'
                },
                cache: false,
                success: function (response){
                    alert(response);
                }
            });
        });
    });
</script>
</body>
</html>
