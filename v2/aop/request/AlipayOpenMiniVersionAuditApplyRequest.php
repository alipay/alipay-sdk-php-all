<?php
/**
 * ALIPAY API: alipay.open.mini.version.audit.apply request
 *
 * @author auto create
 * @since 1.0, 2023-09-11 17:31:45
 */
class AlipayOpenMiniVersionAuditApplyRequest
{
	/** 
	 * 小程序类目，格式为 第一个一级类目_第一个二级类目;第二个一级类目_第二个二级类目，详细类目可以通过  https://docs.open.alipay.com/api_49/alipay.open.mini.category.query接口查询，如果不填默认采用当前小程序应用类目。使用默认应用类目后不需要再次上传营业执照号、营业执照名、营业执照截图、营业执照有效期。
	 **/
	private $appCategoryIds;
	
	/** 
	 * 小程序描述，长度限制 20~400 个字符。
如果前期已经设置过该信息，本次可不填，平台将会为你默认上传该信息。如果前期没有设置过该信息，则本次为必填。可通过https://opendocs.alipay.com/mini/03l21r查询当前小程序信息
	 **/
	private $appDesc;
	
	/** 
	 * 小程序应用英文名称，长度限制 3～30 个字符；仅支持英文和数字。
如果不填默认采用当前小程序应用英文名称，如无默认值则必填，不可为空。
	 **/
	private $appEnglishName;
	
	/** 
	 * 小程序logo图标，图片格式仅支持 jpeg,png,jpg,PNG,JPG ,JPEG格式，不支持 bmp,gif,BMP,GIF格式。建议上传像素为180*180 px，logo图片最大 2M，图片高度与宽度必须一致。
如果不填默认采用当前小程序 logo 图标。如果前期已经设置过该信息，本次可不填，平台将会为你默认上传该信息。如果前期没有设置过该信息，则本次为必填。
	 **/
	private $appLogo;
	
	/** 
	 * 小程序名称，长度限制 3~30 个字符，仅支持包含中文、数字、英文、下划线、+、-。
如果不填默认采用当前小程序应用名称，如无默认值则必填，不可为空。
如果前期已经设置过该信息，本次可不填，平台将会为你默认上传该信息。如果前期没有设置过该信息，则本次为必填。可通过https://opendocs.alipay.com/mini/03l21r查询当前小程序信息
	 **/
	private $appName;
	
	/** 
	 * 小程序简介，一句话描述小程序功能，长度限制 10~32个字符。
如果前期已经设置过该信息，本次可不填，平台将会为你默认上传该信息。如果前期没有设置过该信息，则本次为必填。可通过https://opendocs.alipay.com/mini/03l21r查询当前小程序信息
	 **/
	private $appSlogan;
	
	/** 
	 * 小程序版本号，请选择开发版本执行提交审核操作。
	 **/
	private $appVersion;
	
	/** 
	 * 审核类型，建议设置成“BASE_PROMOTE”，小程序将会更容易上架。将小程序发布审核拆分成“准入”、“营销”。原先小程序需要两个环节都审核通过才能上架，现在小程序只需要准入通过即可上架，但是无法在营销场景（支付宝泛搜、支付宝首页推荐等）展现给用户，小程序可通过精搜或者扫码等方式使用。如果小程序需要进行营销，可发布新版本，当准入&营销都通过后，小程序也可被营销。点击查看支付宝小程序营销规范：https://opendocs.alipay.com/b/03al2q
	 **/
	private $auditRule;
	
	/** 
	 * 审核通过后是否自动上架，
自动上架：true；不自动上架（默认）：false。
如果小程序上架前无需特殊处理，建议设置成true，平台将会在小程序审核通过时自动将其上架
	 **/
	private $autoOnline;
	
	/** 
	 * 小程序投放的端参数。例如投放到支付宝钱包是支付宝端。默认支付宝端。支持：
com.alipay.alipaywallet:支付宝端；
com.alipay.iot.xpaas：支付宝IoT端。
	 **/
	private $bundleId;
	
	/** 
	 * 第五张营业执照照片，不能超过 4MB，最大宽度 2160 px，最大高度 3840 px。图片格式仅支持 png,jpg,PNG,JPG 格式。
部分小程序类目需要提交，可通过https://opendocs.alipay.com/mini/03l8c8 查询类目是否需要上传营业执照信息。参照https://opendocs.alipay.com/mini/operation/material 要求填写营业执照信息。
如果选择的类目不需要该信息，则可不填。如果选择的类目需要该信息，如果商户之前在平台上传过该信息，也允许不填
	 **/
	private $fifthLicensePic;
	
	/** 
	 * 小程序第五张应用截图，模板实例化的小程序可不传应用截图。
截图大小不能超过 4MB，最大宽度 2160px，最大高度3840px。图片格式仅支持 png,jpg,PNG,JPG 格式。小程序截图数量最小为2，最大为5。
	 **/
	private $fifthScreenShot;
	
	/** 
	 * 第一张营业执照照片，不能超过 4MB，最大宽度 2160 px，最大高度 3840 px。图片格式仅支持 png,jpg,PNG,JPG 格式。
部分小程序类目需要提交，可通过https://opendocs.alipay.com/mini/03l8c8 查询类目是否需要上传营业执照信息。参照https://opendocs.alipay.com/mini/operation/material 要求填写营业执照信息。
如果选择的类目不需要该信息，则可不填。如果选择的类目需要该信息，如果商户之前在平台上传过该信息，也允许不填
	 **/
	private $firstLicensePic;
	
	/** 
	 * 小程序第一张应用截图，模板实例化的小程序可不传应用截图。
截图大小不能超过 4MB，最大宽度 2160px，最大高度 3840px。图片格式仅支持 png,jpg,PNG,JPG 格式。小程序截图数量最小为2，最大为5。
	 **/
	private $firstScreenShot;
	
	/** 
	 * 第一张特殊资质图片，不能超过4MB，最大宽度 2160px，最大高度3840px。图片格式仅支持 png,jpg,PNG,JPG 格式。
部分小程序类目需要提交，可通过https://opendocs.alipay.com/mini/03l8c8 查询类目是否需要上传营业执照信息。参照https://opendocs.alipay.com/mini/operation/material 要求填写营业执照信息。
如果前期已经设置过该信息，本次可不填，平台将会为你默认上传该信息。如果前期没有设置过该信息，则本次为必填。
	 **/
	private $firstSpecialLicensePic;
	
	/** 
	 * 第四张营业执照照片，不能超过 4MB，最大宽度 2160 px，最大高度 3840 px。图片格式仅支持 png,jpg,PNG,JPG 格式。
部分小程序类目需要提交，可通过https://opendocs.alipay.com/mini/03l8c8 查询类目是否需要上传营业执照信息。参照https://opendocs.alipay.com/mini/operation/material 要求填写营业执照信息。
如果选择的类目不需要该信息，则可不填。如果选择的类目需要该信息，如果商户之前在平台上传过该信息，也允许不填
	 **/
	private $fourthLicensePic;
	
	/** 
	 * 小程序第四张应用截图，模板实例化的小程序可不传应用截图。
截图大小不能超过 4MB，最大宽度 2160px，最大高度3840px。图片格式仅支持 png,jpg,PNG,JPG 格式。小程序截图数量最小为2，最大为5。
	 **/
	private $fourthScreenShot;
	
	/** 
	 * 营业执照名称，部分小程序类目需要提交，可通过https://opendocs.alipay.com/mini/03l8c8 查询类目是否需要上传营业执照信息。参照https://opendocs.alipay.com/mini/operation/material 要求填写营业执照信息。
如果选择的类目不需要该信息，则可不填。如果选择的类目需要该信息，如果商户之前在平台上传过该信息，也允许不填
	 **/
	private $licenseName;
	
	/** 
	 * 营业执照证件号，部分小程序类目需要提交，可通过https://opendocs.alipay.com/mini/03l8c8 查询类目是否需要上传营业执照信息。参照https://opendocs.alipay.com/mini/operation/material 要求填写营业执照信息。

如果选择的类目不需要该信息，则可不填。如果选择的类目需要该信息，如果商户之前在平台上传过该信息，也允许不填
	 **/
	private $licenseNo;
	
	/** 
	 * 营业执照有效期，格式为 yyyy-MM-dd，9999-12-31表示长期有效。
部分小程序类目需要提交，可通过https://opendocs.alipay.com/mini/03l8c8 查询类目是否需要上传营业执照信息。参照https://opendocs.alipay.com/mini/operation/material 要求填写营业执照信息。
如果选择的类目不需要该信息，则可不填。如果选择的类目需要该信息，如果商户之前在平台上传过该信息，也允许不填
	 **/
	private $licenseValidDate;
	
	/** 
	 * 小程序备注，小程序备注最多500字符。
	 **/
	private $memo;
	
	/** 
	 * 新小程序前台类目，格式为 第一个一级类目_第一个二级类目;第二个一级类目_第二个二级类目_第二个三级类目，详细类目可以通过 https://docs.open.alipay.com/api_49/alipay.open.mini.category.query
接口查询mini_category_list。
如果前期已经设置过该信息，本次可不填，平台将会为你默认上传该信息。如果前期没有设置过该信息，则本次为必填。可通过https://opendocs.alipay.com/mini/03l21r查询当前小程序信息
注意：个人开发者不得使用企业类目。
	 **/
	private $miniCategoryIds;
	
	/** 
	 * 门头照，不能超过 4MB，最大宽度 2160 px，最大高度 3840 px。图片格式仅支持 png,jpg,PNG,JPG 格式。
部分小程序类目需要提交，可通过https://opendocs.alipay.com/mini/03l8c8 查询类目是否需要上传门头照信息。参照https://opendocs.alipay.com/mini/operation/material 要求填写门头照信息。
如果前期已经设置过该信息，本次可不填，平台将会为你默认上传该信息。如果前期没有设置过该信息，则本次为必填。
	 **/
	private $outDoorPic;
	
	/** 
	 * 小程序服务区域类型
如果前期已经设置过该信息，本次可不填，平台将会为你默认上传该信息。如果前期没有设置过该信息，则本次为必填。
	 **/
	private $regionType;
	
	/** 
	 * 第二张营业执照照片，不能超过 4MB，最大宽度 2160 px，最大高度 3840 px。图片格式仅支持 png,jpg,PNG,JPG 格式。
部分小程序类目需要提交，可通过https://opendocs.alipay.com/mini/03l8c8 查询类目是否需要上传营业执照信息。参照https://opendocs.alipay.com/mini/operation/material 要求填写营业执照信息。
如果选择的类目不需要该信息，则可不填。如果选择的类目需要该信息，如果商户之前在平台上传过该信息，也允许不填
	 **/
	private $secondLicensePic;
	
	/** 
	 * 小程序第二张应用截图，模板实例化的小程序可不传应用截图。
截图大小不能超过 4MB，最大宽度 2160px，最大高度3840px。图片格式仅支持 png,jpg,PNG,JPG 格式。小程序截图数量最小为2，最大为5。
	 **/
	private $secondScreenShot;
	
	/** 
	 * 第二张特殊资质图片文件，不能超过4MB，最大宽度 2160px，最大高度3840px。图片格式仅支持 png,jpg,PNG,JPG 格式。
部分小程序类目需要提交，可通过https://opendocs.alipay.com/mini/03l8c8 查询类目是否需要上传营业执照信息。参照https://opendocs.alipay.com/mini/operation/material 要求填写营业执照信息。
如果前期已经设置过该信息，本次可不填，平台将会为你默认上传该信息。如果前期没有设置过该信息，则本次为必填。
	 **/
	private $secondSpecialLicensePic;
	
	/** 
	 * 小程序客服邮箱，如果不填默认采用当前小程序的应用客服邮箱，小程序客服电话和邮箱至少输入一个。如果前期已经设置过该信息，本次可不填，平台将会为你默认上传该信息。
注意：2021年7月1日后，该字段将逐步灰度为可选字段，请按可选开发。
	 **/
	private $serviceEmail;
	
	/** 
	 * 小程序客服电话，长度限制5~30个字符，仅支持包含数字和-。如果不填默认采用当前小程序的应用客服电话，小程序客服电话和邮箱至少输入一个。如果前期已经设置过该信息，本次可不填，平台将会为你默认上传该信息。
注意：2021年7月1日后，该字段将逐步灰度为必填字段，请按必填开发。
	 **/
	private $servicePhone;
	
	/** 
	 * 省市区信息。当region_type为LOCATION或传入city_code时，province_code不能为空；填写area_code时，province_code和city_code不能为空。只填province_code则全选该省；填写province_code和city_code则全选该市，以此类推。省市区code参见https://gw.alipayobjects.com/os/bmw-prod/0aab0319-13de-42b9-85cf-13877a5f78ed.xlsx
如果前期已经设置过该信息，本次可不填，平台将会为你默认上传该信息。如果前期没有设置过该信息，则本次为必填。
	 **/
	private $serviceRegionInfo;
	
	/** 
	 * 如果有审核加急权益，是否使用审核加急权益加速审核：
加速（默认）：true
不加速：false
	 **/
	private $speedUp;
	
	/** 
	 * 测试账号，是否需要填写请参见https://opendocs.alipay.com/mini/operation/standard/case/akxg6r#3.%20%E6%B5%8B%E8%AF%95%E5%86%85%E5%AE%B9%E6%8F%90%E4%BA%A4%E4%B8%8D%E5%AE%8C%E6%95%B4
	 **/
	private $testAccout;
	
	/** 
	 * 测试附件，用于上传测试报告和测试录屏，请上传10M以内附件，支持格式zip，rar。是否需要填写请参见:https://opendocs.alipay.com/mini/operation/standard/case/akxg6r#3.%20%E6%B5%8B%E8%AF%95%E5%86%85%E5%AE%B9%E6%8F%90%E4%BA%A4%E4%B8%8D%E5%AE%8C%E6%95%B4
	 **/
	private $testFileName;
	
	/** 
	 * 测试账号密码
	 **/
	private $testPassword;
	
	/** 
	 * 第三张营业执照照片，不能超过 4MB，最大宽度 2160 px，最大高度 3840 px。图片格式仅支持 png,jpg,PNG,JPG 格式。
部分小程序类目需要提交，可通过https://opendocs.alipay.com/mini/03l8c8 查询类目是否需要上传营业执照信息。参照https://opendocs.alipay.com/mini/operation/material 要求填写营业执照信息。
如果选择的类目不需要该信息，则可不填。如果选择的类目需要该信息，如果商户之前在平台上传过该信息，也允许不填
	 **/
	private $thirdLicensePic;
	
	/** 
	 * 小程序第三张应用截图，模板实例化的小程序可不传应用截图。
截图大小不能超过 4MB，最大宽度 2160px，最大高度 3840px。图片格式仅支持 png,jpg,PNG,JPG 格式。小程序截图数量最小为2，最大为5。
	 **/
	private $thirdScreenShot;
	
	/** 
	 * 第三张特殊资质图片文件，不能超过4MB，最大宽度 2160px，最大高度3840px。图片格式仅支持 png,jpg,PNG,JPG 格式。
部分小程序类目需要提交，可通过https://opendocs.alipay.com/mini/03l8c8 查询类目是否需要上传营业执照信息。参照https://opendocs.alipay.com/mini/operation/material 要求填写营业执照信息。
如果前期已经设置过该信息，本次可不填，平台将会为你默认上传该信息。如果前期没有设置过该信息，则本次为必填。
	 **/
	private $thirdSpecialLicensePic;
	
	/** 
	 * 小程序版本描述，介绍此版本的主要变更和功能，5-500个字符。
	 **/
	private $versionDesc;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setAppCategoryIds($appCategoryIds)
	{
		$this->appCategoryIds = $appCategoryIds;
		$this->apiParas["app_category_ids"] = $appCategoryIds;
	}

	public function getAppCategoryIds()
	{
		return $this->appCategoryIds;
	}

	public function setAppDesc($appDesc)
	{
		$this->appDesc = $appDesc;
		$this->apiParas["app_desc"] = $appDesc;
	}

	public function getAppDesc()
	{
		return $this->appDesc;
	}

	public function setAppEnglishName($appEnglishName)
	{
		$this->appEnglishName = $appEnglishName;
		$this->apiParas["app_english_name"] = $appEnglishName;
	}

	public function getAppEnglishName()
	{
		return $this->appEnglishName;
	}

	public function setAppLogo($appLogo)
	{
		$this->appLogo = $appLogo;
		$this->apiParas["app_logo"] = $appLogo;
	}

	public function getAppLogo()
	{
		return $this->appLogo;
	}

	public function setAppName($appName)
	{
		$this->appName = $appName;
		$this->apiParas["app_name"] = $appName;
	}

	public function getAppName()
	{
		return $this->appName;
	}

	public function setAppSlogan($appSlogan)
	{
		$this->appSlogan = $appSlogan;
		$this->apiParas["app_slogan"] = $appSlogan;
	}

	public function getAppSlogan()
	{
		return $this->appSlogan;
	}

	public function setAppVersion($appVersion)
	{
		$this->appVersion = $appVersion;
		$this->apiParas["app_version"] = $appVersion;
	}

	public function getAppVersion()
	{
		return $this->appVersion;
	}

	public function setAuditRule($auditRule)
	{
		$this->auditRule = $auditRule;
		$this->apiParas["audit_rule"] = $auditRule;
	}

	public function getAuditRule()
	{
		return $this->auditRule;
	}

	public function setAutoOnline($autoOnline)
	{
		$this->autoOnline = $autoOnline;
		$this->apiParas["auto_online"] = $autoOnline;
	}

	public function getAutoOnline()
	{
		return $this->autoOnline;
	}

	public function setBundleId($bundleId)
	{
		$this->bundleId = $bundleId;
		$this->apiParas["bundle_id"] = $bundleId;
	}

	public function getBundleId()
	{
		return $this->bundleId;
	}

	public function setFifthLicensePic($fifthLicensePic)
	{
		$this->fifthLicensePic = $fifthLicensePic;
		$this->apiParas["fifth_license_pic"] = $fifthLicensePic;
	}

	public function getFifthLicensePic()
	{
		return $this->fifthLicensePic;
	}

	public function setFifthScreenShot($fifthScreenShot)
	{
		$this->fifthScreenShot = $fifthScreenShot;
		$this->apiParas["fifth_screen_shot"] = $fifthScreenShot;
	}

	public function getFifthScreenShot()
	{
		return $this->fifthScreenShot;
	}

	public function setFirstLicensePic($firstLicensePic)
	{
		$this->firstLicensePic = $firstLicensePic;
		$this->apiParas["first_license_pic"] = $firstLicensePic;
	}

	public function getFirstLicensePic()
	{
		return $this->firstLicensePic;
	}

	public function setFirstScreenShot($firstScreenShot)
	{
		$this->firstScreenShot = $firstScreenShot;
		$this->apiParas["first_screen_shot"] = $firstScreenShot;
	}

	public function getFirstScreenShot()
	{
		return $this->firstScreenShot;
	}

	public function setFirstSpecialLicensePic($firstSpecialLicensePic)
	{
		$this->firstSpecialLicensePic = $firstSpecialLicensePic;
		$this->apiParas["first_special_license_pic"] = $firstSpecialLicensePic;
	}

	public function getFirstSpecialLicensePic()
	{
		return $this->firstSpecialLicensePic;
	}

	public function setFourthLicensePic($fourthLicensePic)
	{
		$this->fourthLicensePic = $fourthLicensePic;
		$this->apiParas["fourth_license_pic"] = $fourthLicensePic;
	}

	public function getFourthLicensePic()
	{
		return $this->fourthLicensePic;
	}

	public function setFourthScreenShot($fourthScreenShot)
	{
		$this->fourthScreenShot = $fourthScreenShot;
		$this->apiParas["fourth_screen_shot"] = $fourthScreenShot;
	}

	public function getFourthScreenShot()
	{
		return $this->fourthScreenShot;
	}

	public function setLicenseName($licenseName)
	{
		$this->licenseName = $licenseName;
		$this->apiParas["license_name"] = $licenseName;
	}

	public function getLicenseName()
	{
		return $this->licenseName;
	}

	public function setLicenseNo($licenseNo)
	{
		$this->licenseNo = $licenseNo;
		$this->apiParas["license_no"] = $licenseNo;
	}

	public function getLicenseNo()
	{
		return $this->licenseNo;
	}

	public function setLicenseValidDate($licenseValidDate)
	{
		$this->licenseValidDate = $licenseValidDate;
		$this->apiParas["license_valid_date"] = $licenseValidDate;
	}

	public function getLicenseValidDate()
	{
		return $this->licenseValidDate;
	}

	public function setMemo($memo)
	{
		$this->memo = $memo;
		$this->apiParas["memo"] = $memo;
	}

	public function getMemo()
	{
		return $this->memo;
	}

	public function setMiniCategoryIds($miniCategoryIds)
	{
		$this->miniCategoryIds = $miniCategoryIds;
		$this->apiParas["mini_category_ids"] = $miniCategoryIds;
	}

	public function getMiniCategoryIds()
	{
		return $this->miniCategoryIds;
	}

	public function setOutDoorPic($outDoorPic)
	{
		$this->outDoorPic = $outDoorPic;
		$this->apiParas["out_door_pic"] = $outDoorPic;
	}

	public function getOutDoorPic()
	{
		return $this->outDoorPic;
	}

	public function setRegionType($regionType)
	{
		$this->regionType = $regionType;
		$this->apiParas["region_type"] = $regionType;
	}

	public function getRegionType()
	{
		return $this->regionType;
	}

	public function setSecondLicensePic($secondLicensePic)
	{
		$this->secondLicensePic = $secondLicensePic;
		$this->apiParas["second_license_pic"] = $secondLicensePic;
	}

	public function getSecondLicensePic()
	{
		return $this->secondLicensePic;
	}

	public function setSecondScreenShot($secondScreenShot)
	{
		$this->secondScreenShot = $secondScreenShot;
		$this->apiParas["second_screen_shot"] = $secondScreenShot;
	}

	public function getSecondScreenShot()
	{
		return $this->secondScreenShot;
	}

	public function setSecondSpecialLicensePic($secondSpecialLicensePic)
	{
		$this->secondSpecialLicensePic = $secondSpecialLicensePic;
		$this->apiParas["second_special_license_pic"] = $secondSpecialLicensePic;
	}

	public function getSecondSpecialLicensePic()
	{
		return $this->secondSpecialLicensePic;
	}

	public function setServiceEmail($serviceEmail)
	{
		$this->serviceEmail = $serviceEmail;
		$this->apiParas["service_email"] = $serviceEmail;
	}

	public function getServiceEmail()
	{
		return $this->serviceEmail;
	}

	public function setServicePhone($servicePhone)
	{
		$this->servicePhone = $servicePhone;
		$this->apiParas["service_phone"] = $servicePhone;
	}

	public function getServicePhone()
	{
		return $this->servicePhone;
	}

	public function setServiceRegionInfo($serviceRegionInfo)
	{
		$this->serviceRegionInfo = $serviceRegionInfo;
		$this->apiParas["service_region_info"] = $serviceRegionInfo;
	}

	public function getServiceRegionInfo()
	{
		return $this->serviceRegionInfo;
	}

	public function setSpeedUp($speedUp)
	{
		$this->speedUp = $speedUp;
		$this->apiParas["speed_up"] = $speedUp;
	}

	public function getSpeedUp()
	{
		return $this->speedUp;
	}

	public function setTestAccout($testAccout)
	{
		$this->testAccout = $testAccout;
		$this->apiParas["test_accout"] = $testAccout;
	}

	public function getTestAccout()
	{
		return $this->testAccout;
	}

	public function setTestFileName($testFileName)
	{
		$this->testFileName = $testFileName;
		$this->apiParas["test_file_name"] = $testFileName;
	}

	public function getTestFileName()
	{
		return $this->testFileName;
	}

	public function setTestPassword($testPassword)
	{
		$this->testPassword = $testPassword;
		$this->apiParas["test_password"] = $testPassword;
	}

	public function getTestPassword()
	{
		return $this->testPassword;
	}

	public function setThirdLicensePic($thirdLicensePic)
	{
		$this->thirdLicensePic = $thirdLicensePic;
		$this->apiParas["third_license_pic"] = $thirdLicensePic;
	}

	public function getThirdLicensePic()
	{
		return $this->thirdLicensePic;
	}

	public function setThirdScreenShot($thirdScreenShot)
	{
		$this->thirdScreenShot = $thirdScreenShot;
		$this->apiParas["third_screen_shot"] = $thirdScreenShot;
	}

	public function getThirdScreenShot()
	{
		return $this->thirdScreenShot;
	}

	public function setThirdSpecialLicensePic($thirdSpecialLicensePic)
	{
		$this->thirdSpecialLicensePic = $thirdSpecialLicensePic;
		$this->apiParas["third_special_license_pic"] = $thirdSpecialLicensePic;
	}

	public function getThirdSpecialLicensePic()
	{
		return $this->thirdSpecialLicensePic;
	}

	public function setVersionDesc($versionDesc)
	{
		$this->versionDesc = $versionDesc;
		$this->apiParas["version_desc"] = $versionDesc;
	}

	public function getVersionDesc()
	{
		return $this->versionDesc;
	}

	public function getApiMethodName()
	{
		return "alipay.open.mini.version.audit.apply";
	}

	public function setNotifyUrl($notifyUrl)
	{
		$this->notifyUrl=$notifyUrl;
	}

	public function getNotifyUrl()
	{
		return $this->notifyUrl;
	}

	public function setReturnUrl($returnUrl)
	{
		$this->returnUrl=$returnUrl;
	}

	public function getReturnUrl()
	{
		return $this->returnUrl;
	}

	public function getApiParas()
	{
		return $this->apiParas;
	}

	public function getTerminalType()
	{
		return $this->terminalType;
	}

	public function setTerminalType($terminalType)
	{
		$this->terminalType = $terminalType;
	}

	public function getTerminalInfo()
	{
		return $this->terminalInfo;
	}

	public function setTerminalInfo($terminalInfo)
	{
		$this->terminalInfo = $terminalInfo;
	}

	public function getProdCode()
	{
		return $this->prodCode;
	}

	public function setProdCode($prodCode)
	{
		$this->prodCode = $prodCode;
	}

	public function setApiVersion($apiVersion)
	{
		$this->apiVersion=$apiVersion;
	}

	public function getApiVersion()
	{
		return $this->apiVersion;
	}

  public function setNeedEncrypt($needEncrypt)
  {

     $this->needEncrypt=$needEncrypt;

  }

  public function getNeedEncrypt()
  {
    return $this->needEncrypt;
  }

}
