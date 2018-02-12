<?php

namespace Drupal\cupcakes_carousel\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\image\Plugin\Field\FieldFormatter\ImageFormatter;

/**
 * Images carousel formatter.
 *
 * @FieldFormatter(
 *   id = "image_carousel",
 *   label = @Translation("Images Carousel"),
 *   field_types = {
 *     "image"
 *   },
 *   quickedit = {
 *     "editor" = "image"
 *   }
 * )
 */
class CarouselFormatter extends ImageFormatter {

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $items = parent::viewElements($items, $langcode);
    
    $elements['#theme'] = 'images_carousel_formatter';
    $elements['#items'] = $items;

    return $elements;
  }

}
