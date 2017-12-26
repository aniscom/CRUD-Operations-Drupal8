<?php
namespace Drupal\anisdata\Plugin\Block;
use Drupal\Core\Block\BlockBase;
/**
 * Provides a 'MydataBlock' block.
 *
 * @Block(
 *  id = "mydata_block",
 *  admin_label = @Translation("Mydata block"),
 * )
 */
class MydataBlock extends BlockBase {
    /**
     * {@inheritdoc}
     */
    public function build() {
        ////$build = [];
        //$build['mydata_block']['#markup'] = 'Implement MydataBlock.';
        $form = \Drupal::formBuilder()->getForm('Drupal\anisdata\Form\MydataForm');
        return $form;
    }
}