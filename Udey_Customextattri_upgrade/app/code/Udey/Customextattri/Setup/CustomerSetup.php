<?php

namespace Udey\Customextattri\Setup;

use Magento\Eav\Model\Config;
use Magento\Eav\Model\Entity\Setup\Context;
use Magento\Eav\Setup\EavSetup;
use Magento\Framework\App\CacheInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Eav\Model\ResourceModel\Entity\Attribute\Group\CollectionFactory;

class CustomerSetup extends EavSetup {

	protected $eavConfig;

	public function __construct(
		ModuleDataSetupInterface $setup,
		Context $context,
		CacheInterface $cache,
		CollectionFactory $attrGroupCollectionFactory,
		Config $eavConfig
		) {
		$this -> eavConfig = $eavConfig;
		parent :: __construct($setup, $context, $cache, $attrGroupCollectionFactory);
	}

	public function installAttributes($customerSetup) {
		$this -> installCustomerAttributes($customerSetup);
		$this -> installCustomerAddressAttributes($customerSetup);
	}

	public function installCustomerAttributes($customerSetup) {
			

		$customerSetup -> addAttribute(\Magento\Customer\Model\Customer::ENTITY,
			'type_of_lead',
			[
			'label' => 'Type of lead',
			'system' => 0,
			'position' => 100,
            'sort_order' =>100,
            'visible' =>  true,
			'note' => '',
				

                        'type' => 'int',
                        'input' => 'select',
						'source' => 'Magento\Eav\Model\Entity\Attribute\Source\Boolean',
			
			]
			);

		$customerSetup -> getEavConfig() -> getAttribute('customer', 'type_of_lead')->setData('is_user_defined',1)->setData('is_required',0)->setData('default_value','')->setData('used_in_forms', ['adminhtml_customer', 'checkout_register', 'customer_account_create', 'customer_account_edit', 'adminhtml_checkout']) -> save();

				

		$customerSetup -> addAttribute(\Magento\Customer\Model\Customer::ENTITY,
			'phone_extension',
			[
			'label' => 'Phone Extension',
			'system' => 0,
			'position' => 100,
            'sort_order' =>100,
            'visible' =>  true,
			'note' => '',
				

                        'type' => 'varchar',
                        'input' => 'text',
			
			]
			);

		$customerSetup -> getEavConfig() -> getAttribute('customer', 'phone_extension')->setData('is_user_defined',1)->setData('is_required',0)->setData('default_value','')->setData('used_in_forms', ['adminhtml_customer', 'checkout_register', 'customer_account_create', 'customer_account_edit', 'adminhtml_checkout']) -> save();

				

		$customerSetup -> addAttribute(\Magento\Customer\Model\Customer::ENTITY,
			'website',
			[
			'label' => 'Website',
			'system' => 0,
			'position' => 100,
            'sort_order' =>100,
            'visible' =>  true,
			'note' => '',
				

                        'type' => 'varchar',
                        'input' => 'text',
			
			]
			);

		$customerSetup -> getEavConfig() -> getAttribute('customer', 'website')->setData('is_user_defined',1)->setData('is_required',0)->setData('default_value','')->setData('used_in_forms', ['adminhtml_customer', 'checkout_register', 'customer_account_create', 'customer_account_edit', 'adminhtml_checkout']) -> save();

				

		$customerSetup -> addAttribute(\Magento\Customer\Model\Customer::ENTITY,
			'how_did_you_hear',
			[
			'label' => 'How did you hear about Bull Outdoor?',
			'system' => 0,
			'position' => 100,
            'sort_order' =>100,
            'visible' =>  true,
			'note' => '',
				

                        'type' => 'varchar',
                        'input' => 'text',
			
			]
			);

		$customerSetup -> getEavConfig() -> getAttribute('customer', 'how_did_you_hear')->setData('is_user_defined',1)->setData('is_required',0)->setData('default_value','')->setData('used_in_forms', ['adminhtml_customer', 'checkout_register', 'customer_account_create', 'customer_account_edit', 'adminhtml_checkout']) -> save();

				

		$customerSetup -> addAttribute(\Magento\Customer\Model\Customer::ENTITY,
			'what_products_carry',
			[
			'label' => 'What products line/Brands do you currently carry?',
			'system' => 0,
			'position' => 100,
            'sort_order' =>100,
            'visible' =>  true,
			'note' => '',
				

                        'type' => 'varchar',
                        'input' => 'text',
			
			]
			);

		$customerSetup -> getEavConfig() -> getAttribute('customer', 'what_products_carry')->setData('is_user_defined',1)->setData('is_required',0)->setData('default_value','')->setData('used_in_forms', ['adminhtml_customer', 'checkout_register', 'customer_account_create', 'customer_account_edit', 'adminhtml_checkout']) -> save();

				

		$customerSetup -> addAttribute(\Magento\Customer\Model\Customer::ENTITY,
			'what_brought_inquire',
			[
			'label' => 'What brought you to inquire about Bull?',
			'system' => 0,
			'position' => 100,
            'sort_order' =>100,
            'visible' =>  true,
			'note' => '',
				

                        'type' => 'varchar',
                        'input' => 'text',
			
			]
			);

		$customerSetup -> getEavConfig() -> getAttribute('customer', 'what_brought_inquire')->setData('is_user_defined',1)->setData('is_required',0)->setData('default_value','')->setData('used_in_forms', ['adminhtml_customer', 'checkout_register', 'customer_account_create', 'customer_account_edit', 'adminhtml_checkout']) -> save();

				

		$customerSetup -> addAttribute(\Magento\Customer\Model\Customer::ENTITY,
			'what_products_interested',
			[
			'label' => 'What Bull Products are you interested in carrying?',
			'system' => 0,
			'position' => 100,
            'sort_order' =>100,
            'visible' =>  true,
			'note' => '',
				

                        'type' => 'varchar',
                        'input' => 'text',
			
			]
			);

		$customerSetup -> getEavConfig() -> getAttribute('customer', 'what_products_interested')->setData('is_user_defined',1)->setData('is_required',0)->setData('default_value','')->setData('used_in_forms', ['adminhtml_customer', 'checkout_register', 'customer_account_create', 'customer_account_edit', 'adminhtml_checkout']) -> save();

				

		$customerSetup -> addAttribute(\Magento\Customer\Model\Customer::ENTITY,
			'are_decision_maker',
			[
			'label' => 'Are you the Decision maker?',
			'system' => 0,
			'position' => 100,
            'sort_order' =>100,
            'visible' =>  true,
			'note' => '',
				

                        'type' => 'int',
                        'input' => 'boolean',
						'source' => 'Magento\Eav\Model\Entity\Attribute\Source\Boolean',
			
			]
			);

		$customerSetup -> getEavConfig() -> getAttribute('customer', 'are_decision_maker')->setData('is_user_defined',1)->setData('is_required',0)->setData('default_value','')->setData('used_in_forms', ['adminhtml_customer', 'checkout_register', 'customer_account_create', 'customer_account_edit', 'adminhtml_checkout']) -> save();

				

		$customerSetup -> addAttribute(\Magento\Customer\Model\Customer::ENTITY,
			'are_currently_buying',
			[
			'label' => 'Are you currently Buying Bull? If yes, from where?',
			'system' => 0,
			'position' => 100,
            'sort_order' =>100,
            'visible' =>  true,
			'note' => '',
				

                        'type' => 'varchar',
                        'input' => 'text',
			
			]
			);

		$customerSetup -> getEavConfig() -> getAttribute('customer', 'are_currently_buying')->setData('is_user_defined',1)->setData('is_required',0)->setData('default_value','')->setData('used_in_forms', ['adminhtml_customer', 'checkout_register', 'customer_account_create', 'customer_account_edit', 'adminhtml_checkout']) -> save();

				

		$customerSetup -> addAttribute(\Magento\Customer\Model\Customer::ENTITY,
			'number_of_loc',
			[
			'label' => 'Number of locations?',
			'system' => 0,
			'position' => 100,
            'sort_order' =>100,
            'visible' =>  true,
			'note' => '',
				

                        'type' => 'varchar',
                        'input' => 'text',
			
			]
			);

		$customerSetup -> getEavConfig() -> getAttribute('customer', 'number_of_loc')->setData('is_user_defined',1)->setData('is_required',0)->setData('default_value','')->setData('used_in_forms', ['adminhtml_customer', 'checkout_register', 'customer_account_create', 'customer_account_edit', 'adminhtml_checkout']) -> save();

				

		$customerSetup -> addAttribute(\Magento\Customer\Model\Customer::ENTITY,
			'com_pri_business',
			[
			'label' => 'What is your company's primary business?',
			'system' => 0,
			'position' => 100,
            'sort_order' =>100,
            'visible' =>  true,
			'note' => '',
				

                        'type' => 'varchar',
                        'input' => 'text',
			
			]
			);

		$customerSetup -> getEavConfig() -> getAttribute('customer', 'com_pri_business')->setData('is_user_defined',1)->setData('is_required',0)->setData('default_value','')->setData('used_in_forms', ['adminhtml_customer', 'checkout_register', 'customer_account_create', 'customer_account_edit', 'adminhtml_checkout']) -> save();

				

		$customerSetup -> addAttribute(\Magento\Customer\Model\Customer::ENTITY,
			'notes_1',
			[
			'label' => 'Notes 1',
			'system' => 0,
			'position' => 100,
            'sort_order' =>100,
            'visible' =>  true,
			'note' => '',
				

                        'type' => 'varchar',
                        'input' => 'text',
			
			]
			);

		$customerSetup -> getEavConfig() -> getAttribute('customer', 'notes_1')->setData('is_user_defined',1)->setData('is_required',0)->setData('default_value','')->setData('used_in_forms', ['adminhtml_customer', 'checkout_register', 'customer_account_create', 'customer_account_edit', 'adminhtml_checkout']) -> save();

				

		$customerSetup -> addAttribute(\Magento\Customer\Model\Customer::ENTITY,
			'notes_2',
			[
			'label' => 'Notes 2',
			'system' => 0,
			'position' => 100,
            'sort_order' =>100,
            'visible' =>  true,
			'note' => '',
				

                        'type' => 'varchar',
                        'input' => 'text',
			
			]
			);

		$customerSetup -> getEavConfig() -> getAttribute('customer', 'notes_2')->setData('is_user_defined',1)->setData('is_required',0)->setData('default_value','')->setData('used_in_forms', ['adminhtml_customer', 'checkout_register', 'customer_account_create', 'customer_account_edit', 'adminhtml_checkout']) -> save();

				

		$customerSetup -> addAttribute(\Magento\Customer\Model\Customer::ENTITY,
			'notes_3',
			[
			'label' => 'Notes 3',
			'system' => 0,
			'position' => 100,
            'sort_order' =>100,
            'visible' =>  true,
			'note' => '',
				

                        'type' => 'varchar',
                        'input' => 'text',
			
			]
			);

		$customerSetup -> getEavConfig() -> getAttribute('customer', 'notes_3')->setData('is_user_defined',1)->setData('is_required',0)->setData('default_value','')->setData('used_in_forms', ['adminhtml_customer', 'checkout_register', 'customer_account_create', 'customer_account_edit', 'adminhtml_checkout']) -> save();

				

		$customerSetup -> addAttribute(\Magento\Customer\Model\Customer::ENTITY,
			'notes_4',
			[
			'label' => 'Notes 4',
			'system' => 0,
			'position' => 100,
            'sort_order' =>100,
            'visible' =>  true,
			'note' => '',
				

                        'type' => 'varchar',
                        'input' => 'text',
			
			]
			);

		$customerSetup -> getEavConfig() -> getAttribute('customer', 'notes_4')->setData('is_user_defined',1)->setData('is_required',0)->setData('default_value','')->setData('used_in_forms', ['adminhtml_customer', 'checkout_register', 'customer_account_create', 'customer_account_edit', 'adminhtml_checkout']) -> save();

				

		$customerSetup -> addAttribute(\Magento\Customer\Model\Customer::ENTITY,
			'notes_5',
			[
			'label' => 'Notes 5',
			'system' => 0,
			'position' => 100,
            'sort_order' =>100,
            'visible' =>  true,
			'note' => '',
				

                        'type' => 'varchar',
                        'input' => 'text',
			
			]
			);

		$customerSetup -> getEavConfig() -> getAttribute('customer', 'notes_5')->setData('is_user_defined',1)->setData('is_required',0)->setData('default_value','')->setData('used_in_forms', ['adminhtml_customer', 'checkout_register', 'customer_account_create', 'customer_account_edit', 'adminhtml_checkout']) -> save();

				

		$customerSetup -> addAttribute(\Magento\Customer\Model\Customer::ENTITY,
			'notes_6',
			[
			'label' => 'Notes 6',
			'system' => 0,
			'position' => 100,
            'sort_order' =>100,
            'visible' =>  true,
			'note' => '',
				

                        'type' => 'varchar',
                        'input' => 'text',
			
			]
			);

		$customerSetup -> getEavConfig() -> getAttribute('customer', 'notes_6')->setData('is_user_defined',1)->setData('is_required',0)->setData('default_value','')->setData('used_in_forms', ['adminhtml_customer', 'checkout_register', 'customer_account_create', 'customer_account_edit', 'adminhtml_checkout']) -> save();

				

		$customerSetup -> addAttribute(\Magento\Customer\Model\Customer::ENTITY,
			'receive_newsletter',
			[
			'label' => 'Would you like to receive Bull Newsletters?',
			'system' => 0,
			'position' => 100,
            'sort_order' =>100,
            'visible' =>  true,
			'note' => '',
				

                        'type' => 'int',
                        'input' => 'boolean',
						'source' => 'Magento\Eav\Model\Entity\Attribute\Source\Boolean',
			
			]
			);

		$customerSetup -> getEavConfig() -> getAttribute('customer', 'receive_newsletter')->setData('is_user_defined',1)->setData('is_required',0)->setData('default_value','')->setData('used_in_forms', ['adminhtml_customer', 'checkout_register', 'customer_account_create', 'customer_account_edit', 'adminhtml_checkout']) -> save();

				
	}

	public function installCustomerAddressAttributes($customerSetup) {
			
	}

	public function getEavConfig() {
		return $this -> eavConfig;
	}
} 