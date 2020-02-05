<div class="event" id="event_link">
    <div class="event_all_header">
       <div class="container">
           <div class="event_header">
               <div class="event_head_item">
                   <a class="event_head_arrow" href="#" onclick="slowScroll('#intro_link')"></a>
               </div>
               <div class="event_head_item">
                   <div class="event_head_inner">
                       <div class="event_head_subtitle">
                           <?php echo $config[$lang]['event_head_subtitle']; ?>
                       </div>
                       <div class="event_head_title">
                           <?php echo $config[$lang]['event_head_title']; ?>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <div class="container">
       <div class="event_content">
           <?php
           $events = mysqli_query($connection, 'SELECT * FROM event ORDER BY event_date ASC LIMIT 3');
           while ( $event = mysqli_fetch_assoc($events) ) {
           ?>
           <div class="event_item">
               <div class="event_item_header">
                   <div class="event_title"><?php echo $event['title']; ?></div>
                   <a href="../assets/pages/event.php?id=<?php echo $event['id']; ?>">
                       <img class="event_photo" src="../assets/images/event/<?php echo $event['image']; ?>">
                   </a>
                   <div class="event_date">
                       <div class="event_date_day"><?php echo date('j', strtotime($event['event_date'])); ?></div><?php echo $config['month_ru'][date('F', strtotime($event['event_date']))]; ?>
                   </div>
               </div>
               <div class="event_item_content">
                   <div class="event_text">
                        <?php echo mb_substr(strip_tags($event['text']), 0, 50, 'utf-8') . " ..."; ?>
                   </div>
               </div>
               <div class="event_footer">
                   <div class="event_button">
                       <a class="event_button_link" href="../assets/pages/event.php?id=<?php echo $event['id']; ?>"><?php echo $config[$lang]['event_button']; ?></a>
                   </div>
              </div>
           </div>
           <?php } ?>
       </div>
   </div>
</div>
