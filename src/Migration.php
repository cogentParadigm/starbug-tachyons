<?php
namespace Starbug\Tachyons;

use Starbug\Db\Schema\AbstractMigration;

class Migration extends AbstractMigration {
  public function up() {
    // anonymous menu
    $this->schema->addRow("menus", ["menu" => "anonymous", "href" => "/"], ["content" => "Home"]);
    $this->schema->addRow("menus", ["menu" => "anonymous", "href" => "login"], ["content" => "Log In"]);

    // user menu
    $this->schema->addRow("menus", ["menu" => "user", "href" => "/"], ["content" => "Home"]);
    $this->schema->addRow("menus", ["menu" => "user", "href" => "logout"], ["content" => "Log Out"]);

    // footer menu
    $this->schema->addRow("menus", ["menu" => "footer"], ["content" => "Home", "href" => "/"]);
  }
}
