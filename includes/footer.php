<div class="footer">
    <div class="footer_content">
        <div class="footer_header">
            <div class="footer_logo_component">
                <img class="footer_logo" src="../assets/images/footer/logo.png">
                <div class="footer_logo_name">
                    <?php echo $config[$lang]['footer_logo_name']; ?>
                </div>
            </div>
        </div>
        <div class="footer_item">
            <div class="footer_item_header">
                <?php echo $config[$lang]['footer_item_header_1']; ?>
            </div>
            <div class="footer_item_content">
                <div class="footer_contact">
                    <div class="footer_contact_item">
                        <img class="footer_phone_img" src="../assets/images/footer/phone.png">
                        <?php echo $config['other']['phone']; ?>
                    </div>
                    <div class="footer_contact_item">
                        <img class="footer_mail_img" src="../assets/images/footer/mail.png">
                        <?php echo $config['other']['email']; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_item">
            <div class="footer_item_header">
                <?php echo $config[$lang]['footer_item_header_2']; ?>
            </div>
            <div class="footer_item_content">
                <div class="footer_map">
                    <div class="footer_map_header">
                        <img class="footer_map_img" src="../assets/images/footer/map.png">
                    </div>
                    <div class="footer_map_content">
                        <?php echo $config[$lang]['footer_map_content']; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_item">
            <div class="footer_item_header">
                <?php echo $config[$lang]['footer_item_header']; ?>
            </div>
            <div class="footer_item_content">
                <div class="footer_soc">
                    <div class="footer_soc_item">
                        <a href="<?php echo $config['other']['youtube']; ?>" target="_blank"><img class="footer_soc_img" src="../assets/images/footer/youtube.png"></a>
                        <a href="<?php echo $config['other']['telegram']; ?>" target="_blank"><img class="footer_soc_img" src="../assets/images/footer/telegram.png"></a>
                    </div>
                    <div class="footer_soc_item">
                        <a href="<?php echo $config['other']['twitter']; ?>" target="_blank"><img class="footer_soc_img" src="../assets/images/footer/twitter.png"></a>
                        <a href="<?php echo $config['other']['instagram']; ?>" target="_blank"><img class="footer_soc_img" src="../assets/images/footer/instagram.png"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_footer">
        <?php echo $config[$lang]['footer_footer']; ?>
    </div>
</div>
