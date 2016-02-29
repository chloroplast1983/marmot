<?php
namespace System\Interfaces;
/**
 * 命令模式接口
 * 
 * @codeCoverageIgnore
 * 
 * @author chloroplast
 * @version 1.0: 20160222
 */
interface Command {
	/**
	 * 执行
	 */
	function execute();
	/**
	 * 回滚
	 */
	function undo();
}
?>