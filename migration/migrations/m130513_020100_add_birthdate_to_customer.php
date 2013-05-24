<?php
class m130513_020100_add_birthdate_to_customer extends MySQLMigration
{
	public function up()
	{
		$this->addColumn('oc_customer', 'birth_date', 'date DEFAULT NULL');
	}

	public function down()
	{
		echo "{ClassName} does not support migration down.\n";
		return false;
	}
}
