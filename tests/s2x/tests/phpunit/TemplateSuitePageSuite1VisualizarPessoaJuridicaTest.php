<?php

/**
 * @author Michael Fernandes <cerberosnash@gmail.com>
 */
class ManterPessoaJuridicaSgdoceSuite1VisualizarPessoaJuridica extends PHPUnit_Extensions_SeleniumTestCase {

    protected function setUp() {
        $this->setBrowser(PHPUNIT_TESTSUITE_EXTENSION_SELENIUM_BROWSER);
        $this->setBrowserUrl(PHPUNIT_TESTSUITE_EXTENSION_SELENIUM_TESTS_URL);
        $this->setHost(PHPUNIT_TESTSUITE_EXTENSION_SELENIUM_HOST);
        $this->setPort((int) PHPUNIT_TESTSUITE_EXTENSION_SELENIUM_PORT);
    }

    public function testMyTestCase() {
        $this->open("/ProjectSgdoc.ManterPessoaJuridicaSgdoce");
        $this->click("link=Add");
        $this->click("link=Suite page");
        $this->waitForPageToLoad("30000");
        $this->type("id=pagename", "Suite1VisualizarPessoaJuridica");
        $this->click("name=save");
        $this->waitForPageToLoad("30000");
    }

}
