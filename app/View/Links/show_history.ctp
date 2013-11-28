<!-- File: /app/View/Posts/index.ctp  (edit links added) -->
<?php debug($links); ?>

<!-- Here's where we loop through our $posts array, printing out post info -->

<?php
//debug($posts);
foreach ($links as $link): ?>
    <tr>
        <td>
            <?php echo $this->Html->link($link['Link']['url']);?>
        </td>
    </tr>
<?php endforeach; ?>
</table>
