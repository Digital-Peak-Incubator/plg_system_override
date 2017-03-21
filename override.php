<?php
defined('_JEXEC') or die;

class PlgSystemOverride extends JPlugin
{
	public function onAfterInitialise()
	{
		if ($this->params->get('nns', 1)) {
			// Create an alias for JModelList on getItems() the following code is executed:
			// JFactory::getApplication()->enqueueMessage('Override called in NONE namespaced class!!');
			JLoader::register('JModelList', __DIR__ . '/NoneNsListModel.php');
		}

		if ($this->params->get('ns', 1)) {
			// Create an alias for Joomla\\Cms\\Model\\ListModel on getItems() the following code is executed:
			// JFactory::getApplication()->enqueueMessage('Override called in namespaced class!!');
			JLoader::register('Joomla\\Cms\\Model\\ListModel', __DIR__ . '/NsListModel.php');
		}
	}
}
