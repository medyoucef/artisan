vendor/laravel/framework/src/Illuminate/Mail/Transport/SesTransport.php [102:109]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    protected function listManagementOptions(SentMessage $message)
    {
        if ($header = $message->getOriginalMessage()->getHeaders()->get('X-SES-LIST-MANAGEMENT-OPTIONS')) {
            if (preg_match("/^(contactListName=)*(?<ContactListName>[^;]+)(;\s?topicName=(?<TopicName>.+))?$/ix", $header->getBodyAsString(), $listManagementOptions)) {
                return array_filter($listManagementOptions, fn ($e) => in_array($e, ['ContactListName', 'TopicName']), ARRAY_FILTER_USE_KEY);
            }
        }
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/laravel/framework/src/Illuminate/Mail/Transport/SesV2Transport.php [106:113]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    protected function listManagementOptions(SentMessage $message)
    {
        if ($header = $message->getOriginalMessage()->getHeaders()->get('X-SES-LIST-MANAGEMENT-OPTIONS')) {
            if (preg_match("/^(contactListName=)*(?<ContactListName>[^;]+)(;\s?topicName=(?<TopicName>.+))?$/ix", $header->getBodyAsString(), $listManagementOptions)) {
                return array_filter($listManagementOptions, fn ($e) => in_array($e, ['ContactListName', 'TopicName']), ARRAY_FILTER_USE_KEY);
            }
        }
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



