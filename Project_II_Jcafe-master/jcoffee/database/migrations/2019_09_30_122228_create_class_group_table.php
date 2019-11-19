<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassGroupTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('class_group', function (Blueprint $table) {
				$table->unsignedBigInteger('class_id');
				$table->unsignedBigInteger('student_id');
				$table->primary(array('class_id', 'student_id'));
				$table->foreign('class_id')->references('id')->on('class_room');
				$table->foreign('student_id')->references('id')->on('students');
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('class_group');
	}
}
