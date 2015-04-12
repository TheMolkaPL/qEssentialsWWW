<?php

class Command {
	private $command, $description, $permission;

	public function __construct($command, $description, $permission = null) {
		$this->command = $command;
		$this->description = $description;
		$this->permission = $permission;
	}

	public function getCommand() {
		return $this->command;
	}

	public function getDescription() {
		return $this->description;
	}

	public function getPermission() {
		$perm = "qessentials." . $this->getCommand();
		if ($this->hasPermission()) {
			$perm = $perm . ", " . $this->permission;
		}
		return $perm;
	}

	public function hasPermission() {
		return $this->permission != null;
	}
}
