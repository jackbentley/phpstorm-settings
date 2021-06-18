#set($tested_name_cc = ${TESTED_NAME.substring(0,1).toUpperCase()}+${TESTED_NAME.substring(1)})
  /**
   * @var ${TESTED_NAME}
   */
  protected ${DS}$tested_name_cc;

  protected function setUp()
  {
    $this->$tested_name_cc = new ${TESTED_NAME}();
  }