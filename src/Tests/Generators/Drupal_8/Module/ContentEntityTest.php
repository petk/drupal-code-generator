<?php

namespace DrupalCodeGenerator\Tests\Drupal_8;

use DrupalCodeGenerator\Tests\GeneratorTestCase;

/**
 * Test for d8:module:content-entity command.
 */
class ContentEntityTest extends GeneratorTestCase {

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    $this->class = 'Drupal_8\Module\ContentEntity';
    $this->answers = [
      'Foo',
      'foo',
      'Description',
      'Custom',
      '8.x-1.0',
      'Example',
      'example',
      '/example',
      'yes',
      'yes',
      'yes',
      'yes',
      'yes',
      'yes',
      'yes',
    ];
    parent::setUp();
  }

  /**
   * Test callback.
   */
  public function testExecute() {

    $this->execute();

    $lines[] = 'The following files have been created:';
    $lines[] = '- foo/foo.info.yml';
    $lines[] = '- foo/foo.links.action.yml';
    $lines[] = '- foo/foo.links.menu.yml';
    $lines[] = '- foo/foo.links.task.yml';
    $lines[] = '- foo/foo.module';
    $lines[] = '- foo/foo.permissions.yml';
    $lines[] = '- foo/foo.routing.yml';
    $lines[] = '- foo/src/Entity/Example.php';
    $lines[] = '- foo/src/ExampleInterface.php';
    $lines[] = '- foo/src/ExampleListBuilder.php';
    $lines[] = '- foo/src/Form/ExampleForm.php';
    $lines[] = '- foo/src/Form/ExampleSettingsForm.php';
    $lines[] = '- foo/templates/example.html.twig';
    $lines[] = '';

    $output = implode("\n", $lines);
    $this->assertEquals($output, $this->commandTester->getDisplay());

  }

}