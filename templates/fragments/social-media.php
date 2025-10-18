<ul class="social-media">
    <?php if (!empty(FACEBOOK)) : ?>
        <li>
            <a class="facebook" href="<?= FACEBOOK ?>" target="_blank">
                <i class="fab fa-facebook-f"></i>
            </a>
        </li>
    <?php endif; ?>
    <?php if (!empty(TWITTER)) : ?>
        <li>
            <a class="twitter" href="<?= TWITTER ?>" target="_blank">
                <i class="fab fa-twitter"></i>
            </a>
        </li>
    <?php endif; ?>
    <?php if (!empty(INSTAGRAM)) : ?>
        <li>
            <a class="instagram" href="<?= INSTAGRAM ?>" target="_blank">
                <i class="fab fa-instagram"></i>
            </a>
        </li>
    <?php endif; ?>
    <?php if (!empty(YOUTUBE)) : ?>
        <li>
            <a class="youtube" href="<?= YOUTUBE ?>" target="_blank">
                <i class="fab fa-youtube"></i>
            </a>
        </li>
    <?php endif; ?>
    <?php if (!empty(GITHUB)) : ?>
        <li>
            <a class="github" href="<?= GITHUB ?>" target="_blank">
                <i class="fab fa-github"></i>
            </a>
        </li>
    <?php endif; ?>
    <?php if (!empty(PINTEREST)) : ?>
        <li>
            <a class="pinterest" href="<?= PINTEREST ?>" target="_blank">
                <i class="fab fa-pinterest"></i>
            </a>
        </li>
    <?php endif; ?>
    <?php if (!empty(TIKTOK)) : ?>
        <li>
            <a class="tiktok" href="<?= TIKTOK ?>" target="_blank">
                <i class="fab fa-tiktok"></i>
            </a>
        </li>
    <?php endif; ?>
    <?php if (!empty(WHATSAPP)) : ?>
        <li>
            <a class="whatsapp" href="https://wa.me/+55<?= WHATSAPP ?>" target="_blank">
                <i class="fab fa-whatsapp"></i>
            </a>
        </li>
    <?php endif; ?>
    <?php if (!empty(EMAIL)) : ?>
        <li>
            <a class="whatsapp" href="mailto:<?= EMAIL ?>" target="_blank">
                <i class="far fa-envelope"></i>
            </a>
        </li>
    <?php endif; ?>
</ul>