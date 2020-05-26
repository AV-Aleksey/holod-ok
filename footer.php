<footer class="footer" id="footer">
    <div class="container">
        <div class="wrap">
            <a href="logo">Холод-<span class="green">OK</span> <i class="fas fa-check" style="font-size: 26px; color: #50b09b;"></i> </a>
        </div>
        <div class="footer-info">
            <div>Электронная почта:
                <?php
                    dynamic_sidebar("mail-one");
                    dynamic_sidebar("mail-two");
                ?>
            </div>
            <div>Контактные телефоны:
                <?php
                    dynamic_sidebar("phone-sot");
                    dynamic_sidebar("phone-home");
                ?>
            </div>
        </div>
    </div>
    <p class="law">2018 / Все права защищены</p>
</footer>
<!--модалки-->
<div style="display: none;">
    <div class="box-modal" id="exampleModal">
        <div class="box-modal_close arcticmodal-close">закрыть</div>
        <div class="content">
            <i class="fab fa-odnoklassniki-square" style="font-size: 36px; margin-right:10px; color: rgba(255,124,80,0.84);"></i>
        </div>
    </div>
</div>
<div style="display: none;">
    <div class="box-modal" id="exampleModal2">
        <div class="box-modal_close arcticmodal-close">закрыть</div>
        <div class="content">
<!--            <img src="" alt="img">-->
            <h5></h5>
            <p></p>
            <button class="offer__btn" id="send">Вызвать мастера!</button>
        </div>
    </div>
</div>
<div style="display: none;">
    <div class="box-modal" id="exampleModal3">
        <div class="box-modal_close arcticmodal-close">закрыть</div>
            <?php dynamic_sidebar('contact-form'); ?>
    </div>
</div>

<div style="display: none;">
    <div class="box-modal" id="exampleModal4">
        <div class="box-modal_close arcticmodal-close">закрыть</div>
        <?php dynamic_sidebar('contact-form-send'); ?>
    </div>
</div>
<div id="scroller">
    <i class="fas fa-chevron-up" style="font-size: 26px; color: #fff"></i>
</div>
<div class="d-none">
</div>
