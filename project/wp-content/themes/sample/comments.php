<div class="my-5">
  <?php if( have_comments() ): ?>
    <ol>
      <?php
        wp_list_comments(array(
          'style' => 'ol',
          'reply_text' => '返信！',
        ));
      ?>
    </ol>
  <?php endif; ?>
  <?php
    comment_form(array(
      'title_reply'  => 'コメントを書く',
      'label_submit' => 'コメントを送信！',
    ));
  ?>
</div>
