<?php
class Captcha
{
    public function __construct($_l51uo2g511qjdq6zfpa5f, $_if49e56s8nqsohdg = null)
    {
        $this->_Ovtxzyah0c5ctro4t3vrk = $_l51uo2g511qjdq6zfpa5f;
        $this->_ovcomgsjv5yd5630onp1euprno = "\x42\104\x43\137\126\103\111\x44\x5f{$_l51uo2g511qjdq6zfpa5f}";
        $this->_Iu5t7u5rpuau7e1sjkvw32fu73 = "{$_l51uo2g511qjdq6zfpa5f}\137\x43\x61\x70\164\x63\150\141\111\x6d\141\147\x65";
        $this->_14yc0bl5nf6pbjpy = BDC_CaptchaDefaults::JavaScriptRequired;
        $this->_1jrznqqgj5fxe5wbyqoen = new BDC_CaptchaBase($_l51uo2g511qjdq6zfpa5f, $_if49e56s8nqsohdg);
        $this->_otc0ouale8wrhglbyl9towafu1 = $this
            ->_1jrznqqgj5fxe5wbyqoen->CaptchaId;
        $this->_ol9r98laxg81kqs3ycgukwbza0 = $this
            ->_1jrznqqgj5fxe5wbyqoen->Settings;
        $this->_169bhoa9fybrl8m9p0zkh7nydd = $this
            ->_ol9r98laxg81kqs3ycgukwbza0->ImageTooltip;
        $this->_142l45frtm4of7iio427rhm5mj = $this
            ->_ol9r98laxg81kqs3ycgukwbza0->SoundTooltip;
        $this->_19ivxkmt0fqhnf1q = $this
            ->_ol9r98laxg81kqs3ycgukwbza0->ReloadTooltip;
        $this->_0tbu96wvzwgow4imkyuwr9tnvl = $this
            ->_ol9r98laxg81kqs3ycgukwbza0->HelpLinkText;
        $this->_ipq7ah9dfk8h5pq8 = $this
            ->_ol9r98laxg81kqs3ycgukwbza0->HelpLinkUrl;
        $this->_l2l1ltojzg8epg9wvegcr = $this
            ->_ol9r98laxg81kqs3ycgukwbza0->ReloadEnabled;
        $this->_o2q6a7pp6pc8h3y28d6t1yd5lx = $this
            ->_ol9r98laxg81kqs3ycgukwbza0->UseSmallIcons;
        $this->_0fuwgrrrcn6m9a5m = $this
            ->_ol9r98laxg81kqs3ycgukwbza0->UseHorizontalIcons;
        $this->_07956dd9tul3fy51 = $this
            ->_ol9r98laxg81kqs3ycgukwbza0->SoundIconUrl;
        $this->_Iprg2qaljb6xn5wbxsj35a7xdy = $this
            ->_ol9r98laxg81kqs3ycgukwbza0->ReloadIconUrl;
        $this->_i5oc8l6wu6ynscyeqh422jsain = $this
            ->_ol9r98laxg81kqs3ycgukwbza0->IconsDivWidth;
        $this->m_TabIndexStart = - 255;
        $this->_1wkj0f4p45143ei4e83by = $this
            ->_ol9r98laxg81kqs3ycgukwbza0->AdditionalCssClasses;
        $this->_070t26b9hzzhmqoh = $this
            ->_ol9r98laxg81kqs3ycgukwbza0->AdditionalInlineCss;
        $this->_0qm2bh17tru8w32oxq5t7bp2ei = $this
            ->_ol9r98laxg81kqs3ycgukwbza0->AddScriptInclude;
        $this->_o4fdlaizkj8suwjhb14g7 = $this
            ->_ol9r98laxg81kqs3ycgukwbza0->AutoFocusInput;
        $this->_Iwj9dkzweuz26cyi = $this
            ->_ol9r98laxg81kqs3ycgukwbza0->AutoClearInput;
        $this->_lpy16rt3s3ni2j4t4lhg9 = $this
            ->_ol9r98laxg81kqs3ycgukwbza0->AutoUppercaseInput;
        $this->_1a8u7qvq1df7nd1wxo1h6 = $this
            ->_ol9r98laxg81kqs3ycgukwbza0->AutoReloadExpiredCaptchas;
        $this->_ixkw2doq80vlu9vdn2dtyhm62q = $this
            ->_ol9r98laxg81kqs3ycgukwbza0->AutoReloadTimeout;
        $this->_O23smk58qcugqizj23j7bc16b4 = $this
            ->_ol9r98laxg81kqs3ycgukwbza0->SoundStartDelay;
        $this->_lhqp99sucnxaqr3egtw0l = $this
            ->_ol9r98laxg81kqs3ycgukwbza0->RemoteScriptEnabled;
        $this->ImageColorMode = $this
            ->_ol9r98laxg81kqs3ycgukwbza0->ImageColorMode;
        $this->JavaScriptRequired = $this
            ->_ol9r98laxg81kqs3ycgukwbza0->JavaScriptRequired;
        new BDC_CaptchaLogging($this
            ->_ol9r98laxg81kqs3ycgukwbza0
            ->ErrorLoggingEnabled);
        $this->Load();
    }
    private $_ol9r98laxg81kqs3ycgukwbza0 = null;
    private $_1jrznqqgj5fxe5wbyqoen;
    public function get_CaptchaBase()
    {
        return $this->_1jrznqqgj5fxe5wbyqoen;
    }
    private $_Ovtxzyah0c5ctro4t3vrk;
    private $_otc0ouale8wrhglbyl9towafu1;
    private $_ovcomgsjv5yd5630onp1euprno;
    protected function get_HiddenFieldId()
    {
        return $this->_ovcomgsjv5yd5630onp1euprno;
    }
    private $_169bhoa9fybrl8m9p0zkh7nydd;
    public function get_ImageTooltip()
    {
        if (BDC_StringHelper::HasValue($this->_169bhoa9fybrl8m9p0zkh7nydd))
        {
            return $this->_169bhoa9fybrl8m9p0zkh7nydd;
        }
        else
        {
            return $this
                ->Localization->ImageTooltip;
        }
    }
    public function set_ImageTooltip($_iusetk9fw31rpbegup88crfrzi)
    {
        if (is_string($_iusetk9fw31rpbegup88crfrzi))
        {
            $this->_169bhoa9fybrl8m9p0zkh7nydd = $_iusetk9fw31rpbegup88crfrzi;
        }
    }
    private $_142l45frtm4of7iio427rhm5mj;
    public function get_SoundTooltip()
    {
        if ($this->SoundPackageMissing && $this
            ->_ol9r98laxg81kqs3ycgukwbza0
            ->WarnAboutMissingSoundPackages)
        {
            return "\74\x65\155\76\103\x61\160\x74\x63\x68\x61\40\163\157\x75\156\144\x20\151\x73\40\x65\156\x61\142\x6c\145\x64\x2c\x20\142\165\x74\40\x74\x68\x65\40\x70\162\157\156\165\156\x63\151\141\x74\151\x6f\x6e\x20\x73\157\165\156\x64\40\x70\141\x63\153\x61\147\145\x20\x72\145\161\x75\151\162\145\144\x20\146\x6f\162\40\164\150\145\40\x63\165\162\162\x65\x6e\164\x20\154\x6f\143\141\154\145\x20\x63\x61\x6e\40\x6e\157\x74\x20\142\145\40\x66\x6f\x75\x6e\144\56\74\x2f\145\155\76\40\n\x3c\x65\x6d\x3e\124\x6f\x20\x65\x6e\141\x62\154\145\x20\103\141\160\164\143\x68\141\x20\163\x6f\165\156\144\40\x66\157\x72\40\x74\x68\151\x73\x20\x6c\x6f\x63\141\154\x65\54\40\x70\154\x65\141\x73\x65\40\x64\x65\160\x6c\x6f\x79\40\164\150\145\40\141\x70\160\162\x6f\160\x72\x69\141\164\145\40\163\x6f\165\x6e\x64\x20\160\x61\x63\153\141\x67\145\40\x74\x6f\40\x74\150\145\x20\74\x63\x6f\x64\145\x3e\\l\x69\142\\b\157\x74\x64\145\x74\145\143\164\\R\145\163\x6f\165\x72\x63\x65\x73\\S\157\x75\x6e\x64\163\\<\x2f\x63\157\144\x65\x3e\40\x66\157\x6c\x64\x65\162\40\157\146\40\x74\150\145\40\102\157\x74\104\145\164\145\143\x74\40\x50\110\120\x20\103\x61\160\x74\143\150\141\40\154\x69\142\x72\x61\x72\x79\x2e\40\x46\157\162\40\x65\x78\141\155\160\154\145\x2c\x20\165\x73\x65\x20\x3c\x63\x6f\x64\145\x3e\120\x72\x6f\156\165\x6e\x63\151\x61\164\151\x6f\156\137\x45\156\x67\154\151\x73\x68\137\x47\102\x2e\142\x64\163\x70\x3c\57\x63\157\144\145\x3e\40\146\x6f\162\40\102\162\151\x74\151\x73\150\40\x45\x6e\x67\x6c\151\x73\x68\x20\x43\x61\160\164\x63\x68\141\40\163\157\165\x6e\144\163\56\74\57\x65\155\76\40\n\74\145\x6d\76\x54\157\40\x64\151\163\x61\x62\154\x65\x20\164\x68\151\163\40\x77\x61\162\x6e\151\x6e\147\40\x61\156\144\x20\162\145\x6d\x6f\x76\145\x20\x74\150\x65\x20\163\x6f\x75\x6e\x64\x20\x69\x63\x6f\156\x20\146\x6f\x72\40\x74\x68\145\40\143\165\x72\162\145\156\164\x20\x43\x61\160\164\x63\x68\x61\40\x6c\157\x63\141\x6c\x65\54\x20\163\145\164\x20\74\143\x6f\x64\145\76\$\x42\157\x74\x44\145\x74\145\x63\x74\55\x3e\x57\x61\162\x6e\101\x62\x6f\165\164\115\x69\163\163\x69\156\147\x53\x6f\165\x6e\144\120\141\x63\153\141\x67\145\163\x20\x3d\x20\x66\x61\x6c\163\x65\73\74\57\x63\x6f\x64\145\x3e\x20\x69\156\x20\x74\150\x65\x20\74\143\x6f\144\145\x3e\x43\x61\160\x74\143\x68\141\x43\x6f\x6e\x66\151\x67\56\x70\x68\x70\x3c\x2f\x63\157\144\x65\76\x20\146\151\154\x65\x2e\40\x54\x6f\40\162\x65\x6d\x6f\166\145\x20\164\150\145\40\163\157\x75\156\x64\40\x69\143\157\156\x20\x66\x6f\x72\40\141\154\154\x20\154\157\143\x61\x6c\x65\163\54\40\163\x69\x6d\x70\154\x79\x20\x73\x65\x74\x20\74\x63\157\144\145\76\$\102\x6f\x74\104\145\x74\145\143\164\55\76\123\157\165\x6e\144\x45\x6e\x61\x62\154\x65\144\40\75\40\x66\141\154\x73\x65\x3b\74\x2f\143\x6f\144\145\x3e\x2e\74\57\145\155\76";
        }
        if (BDC_StringHelper::HasValue($this->_142l45frtm4of7iio427rhm5mj))
        {
            return $this->_142l45frtm4of7iio427rhm5mj;
        }
        else
        {
            return $this
                ->Localization->SoundTooltip;
        }
    }
    public function set_SoundTooltip($_ogq0wagfwjcwlgfe)
    {
        if (is_string($_ogq0wagfwjcwlgfe))
        {
            $this->_142l45frtm4of7iio427rhm5mj = $_ogq0wagfwjcwlgfe;
        }
    }
    public function get_CaptchaSoundAvailable()
    {
        return $this
            ->_1jrznqqgj5fxe5wbyqoen->IsLocalizedPronunciationAvailable;
    }
    public function get_SoundPackageMissing()
    {
        return ($this->SoundEnabled && !$this->CaptchaSoundAvailable);
    }
    private $_19ivxkmt0fqhnf1q;
    public function get_ReloadTooltip()
    {
        if (BDC_StringHelper::HasValue($this->_19ivxkmt0fqhnf1q))
        {
            return $this->_19ivxkmt0fqhnf1q;
        }
        else
        {
            return $this
                ->Localization->ReloadTooltip;
        }
    }
    public function set_ReloadTooltip($_ovcbsanhgs94acbodfxafl965z)
    {
        if (is_string($_ovcbsanhgs94acbodfxafl965z))
        {
            $this->_19ivxkmt0fqhnf1q = $_ovcbsanhgs94acbodfxafl965z;
        }
    }
    private $_0tbu96wvzwgow4imkyuwr9tnvl;
    public function get_HelpLinkText()
    {
        if (BDC_StringHelper::HasValue($this->_0tbu96wvzwgow4imkyuwr9tnvl))
        {
            return BDC_HelpLinkHelper::GetHelpLinkText($this->_0tbu96wvzwgow4imkyuwr9tnvl, $this->ImageWidth);
        }
        else
        {
            return BDC_HelpLinkHelper::GetDefaultText($this->ImageWidth);
        }
    }
    public function set_HelpLinkText($_Ieekroo24rtiwgfi)
    {
        if (is_string($_Ieekroo24rtiwgfi))
        {
            $this->_0tbu96wvzwgow4imkyuwr9tnvl = $_Ieekroo24rtiwgfi;
        }
    }
    private $_ipq7ah9dfk8h5pq8;
    public function get_HelpLinkUrl()
    {
        if (BDC_StringHelper::HasValue($this->_ipq7ah9dfk8h5pq8))
        {
            return BDC_HelpLinkHelper::GetHelpLinkUrl($this->_ipq7ah9dfk8h5pq8, $this->Localization);
        }
        else
        {
            return BDC_HelpLinkHelper::GetDefaultUrl($this->Localization);
        }
    }
    public function set_HelpLinkUrl($_13l7ycv4fy3xav4enuem04iayz)
    {
        if (is_string($_13l7ycv4fy3xav4enuem04iayz))
        {
            $this->_ipq7ah9dfk8h5pq8 = $_13l7ycv4fy3xav4enuem04iayz;
        }
    }
    private $_l2l1ltojzg8epg9wvegcr;
    public function get_ReloadEnabled()
    {
        return $this->_l2l1ltojzg8epg9wvegcr;
    }
    public function set_ReloadEnabled($_lyriul8b88a5u1ma98sqcpck06)
    {
        if (is_bool($_lyriul8b88a5u1ma98sqcpck06))
        {
            $this->_l2l1ltojzg8epg9wvegcr = $_lyriul8b88a5u1ma98sqcpck06;
        }
    }
    private $_o2q6a7pp6pc8h3y28d6t1yd5lx;
    public function get_UseSmallIcons()
    {
        if (is_bool($this->_o2q6a7pp6pc8h3y28d6t1yd5lx))
        {
            return $this->_o2q6a7pp6pc8h3y28d6t1yd5lx;
        }
        else
        {
            return ($this->ImageHeight < 50);
        }
    }
    public function set_UseSmallIcons($_1liydfh6xhijyrigwgg03)
    {
        if (is_null($_1liydfh6xhijyrigwgg03) || is_bool($_1liydfh6xhijyrigwgg03))
        {
            $this->_o2q6a7pp6pc8h3y28d6t1yd5lx = $_1liydfh6xhijyrigwgg03;
        }
    }
    private $_0fuwgrrrcn6m9a5m;
    public function get_UseHorizontalIcons()
    {
        if (is_bool($this->_0fuwgrrrcn6m9a5m))
        {
            return $this->_0fuwgrrrcn6m9a5m;
        }
        else
        {
            return ($this->ImageHeight < 40);
        }
    }
    public function set_UseHorizontalIcons($_ii1sk67638mr2z3plq8rp)
    {
        if (is_null($_ii1sk67638mr2z3plq8rp) || is_bool($_ii1sk67638mr2z3plq8rp))
        {
            $this->_0fuwgrrrcn6m9a5m = $_ii1sk67638mr2z3plq8rp;
        }
    }
    private $_07956dd9tul3fy51;
    public function get_SoundIconUrl()
    {
        $_opxpqo93res3hdcys0oxcaa192;
        if (BDC_StringHelper::HasValue($this->_07956dd9tul3fy51))
        {
            $_opxpqo93res3hdcys0oxcaa192 = $this->_07956dd9tul3fy51;
        }
        else
        {
            $_opxpqo93res3hdcys0oxcaa192 = CaptchaUrls::DefaultSoundIconUrl();
            if ($this->UseSmallIcons)
            {
                $_opxpqo93res3hdcys0oxcaa192 = CaptchaUrls::SmallIconUrl($_opxpqo93res3hdcys0oxcaa192);
            }
        }
        if ($this->SoundPackageMissing && $this
            ->_ol9r98laxg81kqs3ycgukwbza0
            ->WarnAboutMissingSoundPackages)
        {
            $_opxpqo93res3hdcys0oxcaa192 = CaptchaUrls::DisabledIconUrl($_opxpqo93res3hdcys0oxcaa192);
        }
        return $_opxpqo93res3hdcys0oxcaa192;
    }
    public function set_SoundIconUrl($_ocu44dcas055l661)
    {
        if (is_string($_ocu44dcas055l661))
        {
            $this->_07956dd9tul3fy51 = $_ocu44dcas055l661;
        }
    }
    private $_Iprg2qaljb6xn5wbxsj35a7xdy;
    public function get_ReloadIconUrl()
    {
        $_O6egyi3br1kf1aki;
        if (BDC_StringHelper::HasValue($this->_Iprg2qaljb6xn5wbxsj35a7xdy))
        {
            $_O6egyi3br1kf1aki = $this->_Iprg2qaljb6xn5wbxsj35a7xdy;
        }
        else
        {
            $_O6egyi3br1kf1aki = CaptchaUrls::DefaultReloadIconUrl();
            if ($this->UseSmallIcons)
            {
                $_O6egyi3br1kf1aki = CaptchaUrls::SmallIconUrl($_O6egyi3br1kf1aki);
            }
        }
        return $_O6egyi3br1kf1aki;
    }
    public function set_ReloadIconUrl($_Orzbpt3nj6dpk201ntbmk8u9jy)
    {
        if (is_string($_Orzbpt3nj6dpk201ntbmk8u9jy))
        {
            $this->_Iprg2qaljb6xn5wbxsj35a7xdy = $_Orzbpt3nj6dpk201ntbmk8u9jy;
        }
    }
    public function get_RenderIcons()
    {
        return ($this->SoundEnabled || $this->_l2l1ltojzg8epg9wvegcr);
    }
    public function get_TotalWidth()
    {
        $_In0m2k1h0z3gd5pv705u1 = $this->ImageWidth;
        if ($this->RenderIcons)
        {
            $_In0m2k1h0z3gd5pv705u1 = $_In0m2k1h0z3gd5pv705u1 + 3 * BDC_CaptchaDefaults::IconSpacing + $this->get_IconsDivWidth();
        }
        return $_In0m2k1h0z3gd5pv705u1;
    }
    public function get_TotalHeight()
    {
        return $this->ImageHeight;
    }
    public function get_DefaultIconWidth()
    {
        if ($this->UseSmallIcons)
        {
            return BDC_CaptchaDefaults::SmallIconSize;
        }
        else
        {
            return BDC_CaptchaDefaults::IconSize;
        }
    }
    private $_i5oc8l6wu6ynscyeqh422jsain;
    public function get_IconsDivWidth()
    {
        if (is_int($this->_i5oc8l6wu6ynscyeqh422jsain) && (0 < $this->_i5oc8l6wu6ynscyeqh422jsain))
        {
            return $this->_i5oc8l6wu6ynscyeqh422jsain;
        }
        else
        {
            return $this->DefaultIconsDivWidth;
        }
    }
    public function set_IconsDivWidth($_l9uo30gt5ob99jdo)
    {
        if (is_int($_l9uo30gt5ob99jdo))
        {
            $this->_i5oc8l6wu6ynscyeqh422jsain = $_l9uo30gt5ob99jdo;
        }
    }
    public function get_DefaultIconsDivWidth()
    {
        if ($this->UseHorizontalIcons)
        {
            return 2 * $this->get_DefaultIconWidth() + 4 * BDC_CaptchaDefaults::IconSpacing;
        }
        else
        {
            return $this->get_DefaultIconWidth() + BDC_CaptchaDefaults::IconSpacing;
        }
    }
    private $_Ir74gtavaoxt4ibnxknajw5kt5 = - 255;
    public function get_TabIndex()
    {
        return $this->_Ir74gtavaoxt4ibnxknajw5kt5;
    }
    public function set_TabIndex($_Ohlcqpoz5a59feqb4cybn)
    {
        $this->_Ir74gtavaoxt4ibnxknajw5kt5 = (int)($_Ohlcqpoz5a59feqb4cybn);
    }
    public function get_IsTabIndexSet()
    {
        $_l6cpgjv9bkn297pgkd2kwhsbmz = false;
        if (-255 != $this->_Ir74gtavaoxt4ibnxknajw5kt5)
        {
            $_l6cpgjv9bkn297pgkd2kwhsbmz = true;
        }
        return $_l6cpgjv9bkn297pgkd2kwhsbmz;
    }
    private $_1wkj0f4p45143ei4e83by = '';
    public function get_AdditionalCssClasses()
    {
        return $this->_1wkj0f4p45143ei4e83by;
    }
    public function set_AdditionalCssClasses($_Iaub8maqq1dev6vjwg0ce)
    {
        if (is_string($_Iaub8maqq1dev6vjwg0ce))
        {
            $this->_1wkj0f4p45143ei4e83by = $_Iaub8maqq1dev6vjwg0ce;
        }
    }
    private $_070t26b9hzzhmqoh = '';
    public function get_AdditionalInlineCss()
    {
        return $this->_070t26b9hzzhmqoh;
    }
    public function set_AdditionalInlineCss($_l2mgk4aw20midsq66brvgco9kv)
    {
        if (is_string($_l2mgk4aw20midsq66brvgco9kv))
        {
            $this->_070t26b9hzzhmqoh = $_l2mgk4aw20midsq66brvgco9kv;
        }
    }
    private $_0qm2bh17tru8w32oxq5t7bp2ei = '';
    public function get_AddScriptInclude()
    {
        return $this->_0qm2bh17tru8w32oxq5t7bp2ei;
    }
    public function set_AddScriptInclude($_leg9bq3npxa1rqmp2l703)
    {
        if (is_bool($_leg9bq3npxa1rqmp2l703))
        {
            $this->_0qm2bh17tru8w32oxq5t7bp2ei = $_leg9bq3npxa1rqmp2l703;
        }
    }
    private $_lpy16rt3s3ni2j4t4lhg9;
    private $_Oz8gr6trybg5brnd = false;
    public function get_AutoUppercaseInput()
    {
        return $this->_lpy16rt3s3ni2j4t4lhg9;
    }
    public function set_AutoUppercaseInput($_idbrbio9wh3f8yxppwmqw9knce)
    {
        if (is_bool($_idbrbio9wh3f8yxppwmqw9knce))
        {
            $this->_lpy16rt3s3ni2j4t4lhg9 = $_idbrbio9wh3f8yxppwmqw9knce;
            $this->_Oz8gr6trybg5brnd = true;
        }
    }
    private $_o4fdlaizkj8suwjhb14g7;
    private $_o1e77zbs1973ttuy = false;
    public function get_AutoFocusInput()
    {
        return $this->_o4fdlaizkj8suwjhb14g7;
    }
    public function set_AutoFocusInput($_l5gbv66x4flelnmb)
    {
        if (is_bool($_l5gbv66x4flelnmb))
        {
            $this->_o4fdlaizkj8suwjhb14g7 = $_l5gbv66x4flelnmb;
            $this->_o1e77zbs1973ttuy = true;
        }
    }
    private $_Iwj9dkzweuz26cyi;
    private $_03pny992s05sbsnc = false;
    public function get_AutoClearInput()
    {
        return $this->_Iwj9dkzweuz26cyi;
    }
    public function set_AutoClearInput($_I1zg20gg85ospxn0ldcrc8t7my)
    {
        if (is_bool($_I1zg20gg85ospxn0ldcrc8t7my))
        {
            $this->_Iwj9dkzweuz26cyi = $_I1zg20gg85ospxn0ldcrc8t7my;
            $this->_03pny992s05sbsnc = true;
        }
    }
    private $_1a8u7qvq1df7nd1wxo1h6;
    private $_0wqtvgjzxmtqlt4xqzg20mcry2 = false;
    public function get_AutoReloadExpiredCaptchas()
    {
        return $this->_1a8u7qvq1df7nd1wxo1h6;
    }
    public function set_AutoReloadExpiredCaptchas($_I9y5lqtd287rlgkvnlxh4)
    {
        if (is_bool($_I9y5lqtd287rlgkvnlxh4))
        {
            $this->_1a8u7qvq1df7nd1wxo1h6 = $_I9y5lqtd287rlgkvnlxh4;
            $this->_0wqtvgjzxmtqlt4xqzg20mcry2 = true;
        }
    }
    private $_ixkw2doq80vlu9vdn2dtyhm62q;
    private $_1n4b3nfx2q02zspfe8k9j5gn75 = false;
    public function get_AutoReloadTimeout()
    {
        return $this->_ixkw2doq80vlu9vdn2dtyhm62q;
    }
    public function set_AutoReloadTimeout($_i8tovai77j3k74p4cp8c4ee3hy)
    {
        if (is_numeric($_i8tovai77j3k74p4cp8c4ee3hy))
        {
            $this->_ixkw2doq80vlu9vdn2dtyhm62q = $_i8tovai77j3k74p4cp8c4ee3hy;
            $this->_1n4b3nfx2q02zspfe8k9j5gn75 = true;
        }
    }
    private $_O23smk58qcugqizj23j7bc16b4;
    private $_11479suu1t146i91i1x5w = false;
    public function get_SoundStartDelay()
    {
        return $this->_O23smk58qcugqizj23j7bc16b4;
    }
    public function set_SoundStartDelay($_Oapogo84sdnf8iq0hxrvh)
    {
        if (self::IsValidSoundStartDelay($_Oapogo84sdnf8iq0hxrvh))
        {
            $this->_O23smk58qcugqizj23j7bc16b4 = $_Oapogo84sdnf8iq0hxrvh;
            $this->_11479suu1t146i91i1x5w = true;
        }
        else
        {
            $this->_O23smk58qcugqizj23j7bc16b4 = BDC_CaptchaDefaults::SoundStartDelay;
            $this->_11479suu1t146i91i1x5w = false;
        }
    }
    public static function IsValidSoundStartDelay($_it7hzp1be0tzikib)
    {
        return (is_numeric($_it7hzp1be0tzikib) && $_it7hzp1be0tzikib >= BDC_CaptchaDefaults::MinSoundStartDelay && $_it7hzp1be0tzikib <= BDC_CaptchaDefaults::MaxSoundStartDelay);
    }
    private $_lhqp99sucnxaqr3egtw0l;
    private $_od1m4jfbf6lall9ixmka3izqvp = false;
    public function get_RemoteScriptEnabled()
    {
        return BDC_CaptchaScriptsHelper::GetRemoteScriptEnabled(true);
    }
    public function set_RemoteScriptEnabled($_08e5pn4ru0yf2zutkbag1)
    {
        if (is_bool($_08e5pn4ru0yf2zutkbag1))
        {
            $this->_lhqp99sucnxaqr3egtw0l = $_08e5pn4ru0yf2zutkbag1;
            $this->_od1m4jfbf6lall9ixmka3izqvp = true;
        }
    }
    private $_14yc0bl5nf6pbjpy;
    private $_058tv8l28amzcrsd = false;
    public function IsJavaScriptRequired()
    {
        $_Ojc92jubxaregimu = $this->_14yc0bl5nf6pbjpy;
        $_Ojc92jubxaregimu = true;
        return $_Ojc92jubxaregimu;
    }
    public function set_JavaScriptRequired($_luhogk7viomfb7zf)
    {
    }
    private $_ivhbf3yl7a1dde7caqedj;
    private $_izqhc2rgwixzs9hk = false;
    public function set_ImageColorMode($_ot9vdpjf2kdri0bc1zt6fzh2bq)
    {
        $this->_ivhbf3yl7a1dde7caqedj = ImageColorMode::None;
    }
    public function get_ImageColorMode()
    {
        return $this->_ivhbf3yl7a1dde7caqedj;
    }
    public function IsHideCaptchaImage()
    {
        return ($this->_ivhbf3yl7a1dde7caqedj != ImageColorMode::None);
    }
    public function get_CaptchaImageStyleCss()
    {
        $_0o31to44w7z2eo3mqa163 = "";
        if ($this->IsHideCaptchaImage())
        {
            $_0o31to44w7z2eo3mqa163 = "\166\151\163\151\x62\x69\154\x69\x74\171\72\x20\x68\151\x64\x64\x65\x6e\40\41\151\155\x70\x6f\162\x74\x61\x6e\x74";
        }
        return $_0o31to44w7z2eo3mqa163;
    }
    public function get_CaptchaImageUrl()
    {
        return CaptchaUrls::CaptchaImageUrl($this->CaptchaId, $this->InstanceId);
    }
    public function get_CaptchaSoundUrl()
    {
        return CaptchaUrls::CaptchaSoundUrl($this->CaptchaId, $this->InstanceId);
    }
    public function GetScriptIncludeMarkup()
    {
        return BDC_HtmlHelper::scriptInclude(CaptchaUrls::CaptchaScriptIncludeUrl($this->CaptchaId, $this->InstanceId));
    }
    private $_Iu5t7u5rpuau7e1sjkvw32fu73;
    public function get_ImageClientId()
    {
        return $this->_Iu5t7u5rpuau7e1sjkvw32fu73;
    }
    private function iu86l()
    {
        return "\102\104\x43\137\165\163\145\162\111\x6e\x70\x75\x74\111\104\x5f{$this->_otc0ouale8wrhglbyl9towafu1}";
    }
    private function j3s0l()
    {
        return "\x42\x44\103\x5f\103\x6f\x64\x65\103\157\x6c\x6c\x65\143\164\x69\157\x6e\137{$this->_otc0ouale8wrhglbyl9towafu1}";
    }
    private function l2fz7()
    {
        return "\102\x44\x43\x5f\103\x6f\x64\145\114\x65\x6e\147\164\150\x5f{$this->_otc0ouale8wrhglbyl9towafu1}";
    }
    private function r9lap()
    {
        return "\x42\x44\x43\x5f\x43\x6f\x64\x65\123\164\171\x6c\x65\x5f{$this->_otc0ouale8wrhglbyl9towafu1}";
    }
    private function ald2v()
    {
        return "\102\x44\x43\x5f\x44\151\x73\141\x6c\x6c\x6f\x77\145\x64\x43\x6f\144\145\x53\165\142\x73\x74\x72\x69\x6e\x67\163\x5f{$this->_otc0ouale8wrhglbyl9towafu1}";
    }
    private function h66o9()
    {
        return "\x42\104\x43\137\103\x6f\x64\145\x54\151\155\x65\157\165\x74\x5f{$this->_otc0ouale8wrhglbyl9towafu1}";
    }
    private function jvku1()
    {
        return "\x42\104\103\x5f\111\x6d\x61\x67\x65\123\164\x79\154\x65\137{$this->_otc0ouale8wrhglbyl9towafu1}";
    }
    private function e4h7k()
    {
        return "\102\104\x43\x5f\111\x6d\141\x67\x65\127\151\x64\164\150\137{$this->_otc0ouale8wrhglbyl9towafu1}";
    }
    private function aptjx()
    {
        return "\x42\104\103\x5f\x49\x6d\141\x67\x65\x48\145\151\147\150\x74\137{$this->_otc0ouale8wrhglbyl9towafu1}";
    }
    private function w3wbs()
    {
        return "\102\x44\x43\137\111\155\x61\x67\145\x46\x6f\162\155\141\164\137{$this->_otc0ouale8wrhglbyl9towafu1}";
    }
    private function whm94()
    {
        return "\102\x44\103\137\x43\165\x73\x74\x6f\x6d\x4c\151\x67\x68\x74\x43\157\154\x6f\162\x5f{$this->_otc0ouale8wrhglbyl9towafu1}";
    }
    private function jqwj1()
    {
        return "\102\x44\103\x5f\x43\165\x73\x74\x6f\x6d\104\141\162\x6b\103\x6f\x6c\x6f\162\x5f{$this->_otc0ouale8wrhglbyl9towafu1}";
    }
    private function rdg8f()
    {
        return "\102\104\103\x5f\x53\x6f\165\156\x64\x45\156\141\x62\x6c\x65\x64\137{$this->_otc0ouale8wrhglbyl9towafu1}";
    }
    private function j1bvx()
    {
        return "\x42\104\103\x5f\x53\157\x75\156\144\123\164\171\x6c\145\137{$this->_otc0ouale8wrhglbyl9towafu1}";
    }
    private function ph1xa()
    {
        return "\x42\104\x43\x5f\x53\x6f\165\x6e\x64\x46\x6f\x72\155\x61\164\x5f{$this->_otc0ouale8wrhglbyl9towafu1}";
    }
    private function yhhxk()
    {
        return "\102\x44\103\137\x53\157\x75\156\x64\122\145\x67\145\156\x65\x72\x61\164\x69\157\x6e\115\x6f\x64\x65\137{$this->_otc0ouale8wrhglbyl9towafu1}";
    }
    private function sjisk()
    {
        return "\x42\104\x43\x5f\x4c\157\x63\x61\x6c\145\x5f{$this->_otc0ouale8wrhglbyl9towafu1}";
    }
    private function xinvo()
    {
        return "\x42\104\103\x5f\110\145\x6c\160\x4c\151\x6e\153\105\x6e\141\x62\x6c\x65\x64\x5f{$this->_otc0ouale8wrhglbyl9towafu1}";
    }
    private function pbsi5()
    {
        return "\x42\104\103\137\110\x65\x6c\160\114\x69\156\x6b\115\157\144\x65\137{$this->_otc0ouale8wrhglbyl9towafu1}";
    }
    private function se3jp()
    {
        return "\102\x44\x43\137\152\141\x76\141\123\x63\162\x69\160\164\122\145\x71\x75\151\162\x65\144\x5f{$this->_otc0ouale8wrhglbyl9towafu1}";
    }
    private function b4zl0()
    {
        return "\102\104\103\137\x41\165\164\x6f\125\160\x70\145\x72\x63\141\163\x65\111\x6e\160\x75\x74\x5f{$this->_otc0ouale8wrhglbyl9towafu1}";
    }
    private function p2tmb()
    {
        return "\x42\x44\x43\137\101\x75\x74\x6f\106\x6f\143\165\x73\x49\156\x70\x75\164\x5f{$this->_otc0ouale8wrhglbyl9towafu1}";
    }
    private function kpjmd()
    {
        return "\102\x44\x43\x5f\x41\165\x74\x6f\103\x6c\x65\x61\162\x49\156\160\x75\164\137{$this->_otc0ouale8wrhglbyl9towafu1}";
    }
    private function i2nj6()
    {
        return "\102\x44\x43\137\x41\x75\164\x6f\122\x65\154\x6f\x61\x64\x45\170\160\151\x72\145\x64\103\141\x70\x74\x63\150\141\163\137{$this->_otc0ouale8wrhglbyl9towafu1}";
    }
    private function q82sa()
    {
        return "\x42\104\103\137\101\x75\164\x6f\122\x65\154\157\x61\x64\124\x69\155\145\x6f\x75\x74\137{$this->_otc0ouale8wrhglbyl9towafu1}";
    }
    private function ykici()
    {
        return "\102\104\x43\137\123\157\x75\x6e\x64\123\164\x61\x72\164\104\x65\154\x61\x79\x5f{$this->_otc0ouale8wrhglbyl9towafu1}";
    }
    private function vygss()
    {
        return "\x42\104\x43\137\x49\x6d\x61\147\145\x43\157\x6c\x6f\x72\115\x6f\144\145\137{$this->_otc0ouale8wrhglbyl9towafu1}";
    }
    private function z5dac()
    {
        return "\x42\x44\103\137\x52\145\x6d\157\x74\145\123\x63\x72\151\160\164\105\x6e\x61\142\x6c\x65\x64\x5f{$this->_otc0ouale8wrhglbyl9towafu1}";
    }
    public function getPCPersistenceKey()
    {
        return "\x42\104\x43\x5f\160\143\137{$this->_otc0ouale8wrhglbyl9towafu1}";
    }
    protected function Load()
    {
        $_1tnk71cse7sqsws2xugla649k9 = unserialize(BDC_Persistence_Load($this->j3s0l()));
        if (BDC_CodeCollection::IsValid($_1tnk71cse7sqsws2xugla649k9))
        {
            $this
                ->CaptchaBase->CodeCollection = $_1tnk71cse7sqsws2xugla649k9;
        }
        $_1tnk71cse7sqsws2xugla649k9 = BDC_Persistence_Load($this->getPCPersistenceKey());
        if (isset($_1tnk71cse7sqsws2xugla649k9))
        {
            $this->PC = $_1tnk71cse7sqsws2xugla649k9;
        }
        $_1tnk71cse7sqsws2xugla649k9 = BDC_Persistence_Load($this->iu86l());
        if (isset($_1tnk71cse7sqsws2xugla649k9))
        {
            $this->UserInputID = $_1tnk71cse7sqsws2xugla649k9;
        }
        $_1tnk71cse7sqsws2xugla649k9 = BDC_Persistence_Load($this->l2fz7());
        if (isset($_1tnk71cse7sqsws2xugla649k9))
        {
            $this->CodeLength = $_1tnk71cse7sqsws2xugla649k9;
        }
        $_1tnk71cse7sqsws2xugla649k9 = BDC_Persistence_Load($this->r9lap());
        if (isset($_1tnk71cse7sqsws2xugla649k9))
        {
            $this->CodeStyle = $_1tnk71cse7sqsws2xugla649k9;
        }
        $_1tnk71cse7sqsws2xugla649k9 = BDC_Persistence_Load($this->h66o9());
        if (isset($_1tnk71cse7sqsws2xugla649k9))
        {
            $this->CodeTimeout = $_1tnk71cse7sqsws2xugla649k9;
        }
        $_1tnk71cse7sqsws2xugla649k9 = BDC_Persistence_Load($this->ald2v());
        if (isset($_1tnk71cse7sqsws2xugla649k9))
        {
            $this->DisallowedCodeSubstrings = $_1tnk71cse7sqsws2xugla649k9;
        }
        $_1tnk71cse7sqsws2xugla649k9 = BDC_Persistence_Load($this->jvku1());
        if (isset($_1tnk71cse7sqsws2xugla649k9))
        {
            $this->ImageStyle = $_1tnk71cse7sqsws2xugla649k9;
        }
        $_1tnk71cse7sqsws2xugla649k9 = BDC_Persistence_Load($this->w3wbs());
        if (isset($_1tnk71cse7sqsws2xugla649k9))
        {
            $this->ImageFormat = $_1tnk71cse7sqsws2xugla649k9;
        }
        $_1tnk71cse7sqsws2xugla649k9 = BDC_Persistence_Load($this->e4h7k());
        if (isset($_1tnk71cse7sqsws2xugla649k9))
        {
            $this->ImageWidth = $_1tnk71cse7sqsws2xugla649k9;
        }
        $_1tnk71cse7sqsws2xugla649k9 = BDC_Persistence_Load($this->aptjx());
        if (isset($_1tnk71cse7sqsws2xugla649k9))
        {
            $this->ImageHeight = $_1tnk71cse7sqsws2xugla649k9;
        }
        $_1tnk71cse7sqsws2xugla649k9 = BDC_Persistence_Load($this->whm94());
        if (isset($_1tnk71cse7sqsws2xugla649k9))
        {
            $this->CustomLightColor = $_1tnk71cse7sqsws2xugla649k9;
        }
        $_1tnk71cse7sqsws2xugla649k9 = BDC_Persistence_Load($this->jqwj1());
        if (isset($_1tnk71cse7sqsws2xugla649k9))
        {
            $this->CustomDarkColor = $_1tnk71cse7sqsws2xugla649k9;
        }
        $_1tnk71cse7sqsws2xugla649k9 = BDC_Persistence_Load($this->rdg8f());
        if (isset($_1tnk71cse7sqsws2xugla649k9))
        {
            $this->SoundEnabled = $_1tnk71cse7sqsws2xugla649k9;
        }
        $_1tnk71cse7sqsws2xugla649k9 = BDC_Persistence_Load($this->j1bvx());
        if (isset($_1tnk71cse7sqsws2xugla649k9))
        {
            $this->SoundStyle = $_1tnk71cse7sqsws2xugla649k9;
        }
        $_1tnk71cse7sqsws2xugla649k9 = BDC_Persistence_Load($this->ph1xa());
        if (isset($_1tnk71cse7sqsws2xugla649k9))
        {
            $this->SoundFormat = $_1tnk71cse7sqsws2xugla649k9;
        }
        $_1tnk71cse7sqsws2xugla649k9 = BDC_Persistence_Load($this->yhhxk());
        if (isset($_1tnk71cse7sqsws2xugla649k9))
        {
            $this->SoundRegenerationMode = $_1tnk71cse7sqsws2xugla649k9;
        }
        $_1tnk71cse7sqsws2xugla649k9 = BDC_Persistence_Load($this->sjisk());
        if (isset($_1tnk71cse7sqsws2xugla649k9))
        {
            $this->Locale = $_1tnk71cse7sqsws2xugla649k9;
        }
        $_1tnk71cse7sqsws2xugla649k9 = BDC_Persistence_Load($this->xinvo());
        if (isset($_1tnk71cse7sqsws2xugla649k9))
        {
            $this->HelpLinkEnabled = $_1tnk71cse7sqsws2xugla649k9;
        }
        $_1tnk71cse7sqsws2xugla649k9 = BDC_Persistence_Load($this->pbsi5());
        if (isset($_1tnk71cse7sqsws2xugla649k9))
        {
            $this->HelpLinkMode = $_1tnk71cse7sqsws2xugla649k9;
        }
        $_1tnk71cse7sqsws2xugla649k9 = BDC_Persistence_Load($this->b4zl0());
        if (isset($_1tnk71cse7sqsws2xugla649k9))
        {
            $this->AutoUppercaseInput = $_1tnk71cse7sqsws2xugla649k9;
        }
        $_1tnk71cse7sqsws2xugla649k9 = BDC_Persistence_Load($this->p2tmb());
        if (isset($_1tnk71cse7sqsws2xugla649k9))
        {
            $this->AutoFocusInput = $_1tnk71cse7sqsws2xugla649k9;
        }
        $_1tnk71cse7sqsws2xugla649k9 = BDC_Persistence_Load($this->kpjmd());
        if (isset($_1tnk71cse7sqsws2xugla649k9))
        {
            $this->AutoClearInput = $_1tnk71cse7sqsws2xugla649k9;
        }
        $_1tnk71cse7sqsws2xugla649k9 = BDC_Persistence_Load($this->i2nj6());
        if (isset($_1tnk71cse7sqsws2xugla649k9))
        {
            $this->AutoReloadExpiredCaptchas = $_1tnk71cse7sqsws2xugla649k9;
        }
        $_1tnk71cse7sqsws2xugla649k9 = BDC_Persistence_Load($this->q82sa());
        if (isset($_1tnk71cse7sqsws2xugla649k9))
        {
            $this->AutoReloadTimeout = $_1tnk71cse7sqsws2xugla649k9;
        }
        $_1tnk71cse7sqsws2xugla649k9 = BDC_Persistence_Load($this->ykici());
        if (isset($_1tnk71cse7sqsws2xugla649k9))
        {
            $this->SoundStartDelay = $_1tnk71cse7sqsws2xugla649k9;
        }
        $_1tnk71cse7sqsws2xugla649k9 = BDC_Persistence_Load($this->vygss());
        if (isset($_1tnk71cse7sqsws2xugla649k9))
        {
            $this->ImageColorMode = $_1tnk71cse7sqsws2xugla649k9;
        }
        $_1tnk71cse7sqsws2xugla649k9 = BDC_Persistence_Load($this->z5dac());
        if (isset($_1tnk71cse7sqsws2xugla649k9))
        {
            $this->RemoteScriptEnabled = $_1tnk71cse7sqsws2xugla649k9;
        }
        $_1tnk71cse7sqsws2xugla649k9 = BDC_Persistence_Load($this->se3jp());
        if (isset($_1tnk71cse7sqsws2xugla649k9))
        {
            $this->JavaScriptRequired = $_1tnk71cse7sqsws2xugla649k9;
        }
    }
    public function Save()
    {
        $this
            ->CaptchaBase
            ->SaveCodeCollection();
        $this->SavePw($this);
        $this
            ->_1jrznqqgj5fxe5wbyqoen
            ->Save();
        if ($this->_Oz8gr6trybg5brnd)
        {
            BDC_Persistence_Save($this->b4zl0() , $this->AutoUppercaseInput);
        }
        else
        {
            BDC_Persistence_Clear($this->b4zl0());
        }
        if ($this->_o1e77zbs1973ttuy)
        {
            BDC_Persistence_Save($this->p2tmb() , $this->AutoFocusInput);
        }
        else
        {
            BDC_Persistence_Clear($this->p2tmb());
        }
        if ($this->_03pny992s05sbsnc)
        {
            BDC_Persistence_Save($this->kpjmd() , $this->AutoClearInput);
        }
        else
        {
            BDC_Persistence_Clear($this->kpjmd());
        }
        if ($this->_0wqtvgjzxmtqlt4xqzg20mcry2)
        {
            BDC_Persistence_Save($this->i2nj6() , $this->AutoReloadExpiredCaptchas);
        }
        else
        {
            BDC_Persistence_Clear($this->i2nj6());
        }
        if ($this->_1n4b3nfx2q02zspfe8k9j5gn75)
        {
            BDC_Persistence_Save($this->q82sa() , $this->AutoReloadTimeout);
        }
        else
        {
            BDC_Persistence_Clear($this->q82sa());
        }
        if ($this->_11479suu1t146i91i1x5w)
        {
            BDC_Persistence_Save($this->ykici() , $this->SoundStartDelay);
        }
        else
        {
            BDC_Persistence_Clear($this->ykici());
        }
        if ($this->_izqhc2rgwixzs9hk)
        {
            BDC_Persistence_Save($this->vygss() , $this->ImageColorMode);
        }
        else
        {
            BDC_Persistence_Clear($this->vygss());
        }
        if ($this->_od1m4jfbf6lall9ixmka3izqvp)
        {
            BDC_Persistence_Save($this->z5dac() , $this->RemoteScriptEnabled);
        }
        else
        {
            BDC_Persistence_Clear($this->z5dac());
        }
        if ($this->_058tv8l28amzcrsd)
        {
            BDC_Persistence_Save($this->se3jp() , $this->IsJavaScriptRequired());
        }
        else
        {
            BDC_Persistence_Clear($this->se3jp());
        }
    }
    public function SaveCodes()
    {
        $this
            ->_1jrznqqgj5fxe5wbyqoen
            ->SaveCodeCollection();
    }
    private $_Ip0ph4xsyb7i66bg;
    public function SavePw($_1ysg4brhplo7topn)
    {
        if ($_1ysg4brhplo7topn->UseM())
        {
            $_0li2q4nhnm164gmu = $_1ysg4brhplo7topn
                ->CaptchaBase->PC;
            if ($_0li2q4nhnm164gmu != null)
            {
                BDC_Persistence_Save($_1ysg4brhplo7topn->getPCPersistenceKey() , $_0li2q4nhnm164gmu);
            }
            else
            {
                BDC_Persistence_Clear($_1ysg4brhplo7topn->getPCPersistenceKey());
            }
        }
    }
    public function get_IsSolved()
    {
        return BDC_Persistence_Load("\102\104\x43\x5f\111\x73\x53\157\154\x76\x65\x64\137" . $this->_otc0ouale8wrhglbyl9towafu1);
    }
    public function Reset()
    {
        BDC_Persistence_Clear("\x42\x44\x43\x5f\111\x73\123\157\x6c\x76\x65\x64\x5f" . $this->_otc0ouale8wrhglbyl9towafu1);
    }
    public function GenPw($_15xbrv4aekfkv9hozlrzm2ly1h)
    {
        return $this
            ->_1jrznqqgj5fxe5wbyqoen
            ->PC
            ->GenP($_15xbrv4aekfkv9hozlrzm2ly1h, $this
            ->_1jrznqqgj5fxe5wbyqoen
            ->CodeTimeout);
    }
    public function Validate($_oatduwrb5m7ietl9msk4feia02 = null, $_Ithhkenyz06b9w80 = null)
    {
        if (!isset($_oatduwrb5m7ietl9msk4feia02) && array_key_exists($this->UserInputID, $_REQUEST))
        {
            $_oatduwrb5m7ietl9msk4feia02 = $_REQUEST[$this->UserInputID];
            $_oatduwrb5m7ietl9msk4feia02 = trim($_oatduwrb5m7ietl9msk4feia02);
        }
        if (!isset($_Ithhkenyz06b9w80) && array_key_exists($this->_ovcomgsjv5yd5630onp1euprno, $_REQUEST))
        {
            $_Ithhkenyz06b9w80 = $_REQUEST[$this->_ovcomgsjv5yd5630onp1euprno];
        }
        $_oprdp4ms1idbnkjj = false;
        if (isset($_oatduwrb5m7ietl9msk4feia02) && isset($_Ithhkenyz06b9w80))
        {
            $_oprdp4ms1idbnkjj = $this
                ->_1jrznqqgj5fxe5wbyqoen
                ->Validate($_oatduwrb5m7ietl9msk4feia02, $_Ithhkenyz06b9w80, BDC_ValidationAttemptOrigin::Server, $this->UseM());
        }
        if ($_oprdp4ms1idbnkjj)
        {
            BDC_Persistence_Save("\x42\104\x43\x5f\111\163\x53\x6f\x6c\166\x65\144\x5f" . $this->_otc0ouale8wrhglbyl9towafu1, true);
        }
        else
        {
            BDC_Persistence_Clear("\x42\104\x43\137\x49\x73\123\157\x6c\166\145\x64\x5f" . $this->_otc0ouale8wrhglbyl9towafu1);
        }
        return $_oprdp4ms1idbnkjj;
    }
    public function AjaxValidate($_Oclfhsfrijv4btm2rc7ml5fvy5 = null, $_0aele7u4ryahmdwg = null)
    {
        $_1udd04yygagzyu9mwtal4 = false;
        if (isset($_Oclfhsfrijv4btm2rc7ml5fvy5) && isset($_0aele7u4ryahmdwg))
        {
            $_1udd04yygagzyu9mwtal4 = $this
                ->_1jrznqqgj5fxe5wbyqoen
                ->Validate($_Oclfhsfrijv4btm2rc7ml5fvy5, $_0aele7u4ryahmdwg, BDC_ValidationAttemptOrigin::Client, $this->UseM());
        }
        if ($_1udd04yygagzyu9mwtal4)
        {
            BDC_Persistence_Save("\x42\104\x43\x5f\111\163\x53\x6f\154\166\x65\144\137" . $this->_otc0ouale8wrhglbyl9towafu1, true);
        }
        else
        {
            BDC_Persistence_Clear("\102\104\103\137\x49\163\x53\157\154\x76\145\144\137" . $this->_otc0ouale8wrhglbyl9towafu1);
        }
        return $_1udd04yygagzyu9mwtal4;
    }
    public function UseM()
    {
        return ($this->IsJavaScriptRequired() && ($this
            ->_1jrznqqgj5fxe5wbyqoen->UserInputID != null) && !$this->TestModeEnabled);
    }
    public function get_SoundFilename()
    {
        if (SoundFormat::WavPcm16bit8kHzMono == $this->SoundFormat)
        {
            return "\x63\x61\160\164\143\150\x61\x5f{$this->InstanceId}\x2e\167\141\x76";
        }
        else if (SoundFormat::WavPcm8bit8kHzMono == $this->SoundFormat)
        {
            return "\143\141\x70\164\x63\x68\141\x5f{$this->InstanceId}\x2e\167\x61\x76";
        }
    }
    public function Html()
    {
        $this->_Ip0ph4xsyb7i66bg = $this->GenPw($this->InstanceId);
        $this->Save();
        $_06el0yshzw5cqwd7j3gxz26sm1 = '';
        if (true === $this->TestModeEnabled)
        {
            $_06el0yshzw5cqwd7j3gxz26sm1 .= "\x3c\x70\x20\143\154\x61\x73\x73\75\42\x42\x44\103\x5f\x57\141\162\156\151\156\147\42\x3e\x54\x65\x73\x74\x20\x4d\x6f\x64\145\x20\105\x6e\x61\142\x6c\x65\x64\x3c\57\x70\76";
        }
        $_1hkxetygizisqcoib2mw1 = "\102\x44\x43\x5f\x43\x61\x70\x74\x63\150\x61\104\x69\166";
        if (BDC_StringHelper::HasValue($this->_1wkj0f4p45143ei4e83by))
        {
            $_1hkxetygizisqcoib2mw1 = $_1hkxetygizisqcoib2mw1 . "\40" . $this->_1wkj0f4p45143ei4e83by;
        }
        $_lyb69t6f90albjb5epgz8 = "\167\151\144\x74\x68\72{$this->TotalWidth}\x70\x78\x3b\40\x68\x65\151\x67\150\x74\x3a{$this->TotalHeight}\x70\x78\x3b";
        if (BDC_StringHelper::HasValue($this->_070t26b9hzzhmqoh))
        {
            $_lyb69t6f90albjb5epgz8 = $_lyb69t6f90albjb5epgz8 . "\40" . $this->_070t26b9hzzhmqoh;
        }
        $_06el0yshzw5cqwd7j3gxz26sm1 .= "\r\n\40\40\x3c\144\x69\166\x20\143\154\141\x73\x73\x3d\"{$_1hkxetygizisqcoib2mw1}\"\40\x69\144\x3d\"{$this->_Ovtxzyah0c5ctro4t3vrk}\x5f\x43\x61\x70\x74\143\150\141\x44\x69\x76\"\x20\163\164\x79\x6c\x65\75\"{$_lyb69t6f90albjb5epgz8}\"\76\74\41\x2d\x2d\r\n";
        $_06el0yshzw5cqwd7j3gxz26sm1 = $this->wuhrd($_06el0yshzw5cqwd7j3gxz26sm1);
        if ($this->RenderIcons)
        {
            $_06el0yshzw5cqwd7j3gxz26sm1 .= "\40\x2d\55\76\74\x2f\x64\x69\166\76\x3c\41\x2d\x2d\r\n";
        }
        else
        {
            $_06el0yshzw5cqwd7j3gxz26sm1 .= "\x20\55\x2d\x3e\74\57\x64\151\x76\x3e\r\n";
        }
        $_06el0yshzw5cqwd7j3gxz26sm1 = $this->uq1jk($_06el0yshzw5cqwd7j3gxz26sm1);
        $_06el0yshzw5cqwd7j3gxz26sm1 = $this->im7af($_06el0yshzw5cqwd7j3gxz26sm1);
        $_06el0yshzw5cqwd7j3gxz26sm1 .= "\x20\x20\x3c\x2f\x64\x69\166\76\r\n";
        return $_06el0yshzw5cqwd7j3gxz26sm1;
    }
    private function wuhrd($_0q6hx4uxflvyv4ne)
    {
        $_0q6hx4uxflvyv4ne .= "\x20\55\x2d\x3e\x3c\144\151\166\x20\143\154\x61\x73\x73\x3d\"\102\x44\x43\137\103\x61\160\164\143\150\x61\111\x6d\141\147\145\104\151\x76\"\x20\x69\144\75\"{$this->_Ovtxzyah0c5ctro4t3vrk}\137\x43\x61\x70\164\143\150\141\111\155\x61\147\145\x44\x69\166\"\x20\163\x74\171\x6c\x65\x3d\"\x77\151\x64\164\150\x3a{$this->ImageWidth}\160\170\x20\x21\x69\155\x70\x6f\162\x74\x61\156\164\73\x20\150\145\151\147\x68\164\x3a{$this->ImageHeight}\160\x78\x20\41\x69\x6d\160\x6f\x72\x74\x61\x6e\x74\x3b\"\76\x3c\41\x2d\55\r\n";
        /*if (!$this->HelpLinkEnabled)
        {
            $_0q6hx4uxflvyv4ne = $this->trg1t($_0q6hx4uxflvyv4ne);
        }
        else
        {
            switch ($this->HelpLinkMode)
            {
                case HelpLinkMode::Image:
                    $_0q6hx4uxflvyv4ne = $this->dww1m($_0q6hx4uxflvyv4ne);
                break;
                case HelpLinkMode::Text:
                    $_0q6hx4uxflvyv4ne = $this->cizfx($_0q6hx4uxflvyv4ne);
                break;
            }
        }
        return $_0q6hx4uxflvyv4ne;*/
        return $this->trg1t($_0q6hx4uxflvyv4ne);
    }
    private function trg1t($_Oz0tr7toc0jnevyf7fc0l)
    {
        $_Oz0tr7toc0jnevyf7fc0l .= "\x20\40\x20\x2d\x2d\x3e\74\x69\x6d\147\x20\x63\154\x61\x73\x73\x3d\"\x42\x44\103\137\103\141\x70\164\x63\x68\x61\111\x6d\141\147\x65\"\x20\151\x64\x3d\"{$this->_Iu5t7u5rpuau7e1sjkvw32fu73}\"\x20\x73\162\143\75\"{$this->CaptchaImageUrl}\"\x20\x61\154\164\75\"{$this->ImageTooltip}\"\40\x73\x74\x79\x6c\x65\75\"{$this->CaptchaImageStyleCss}\"\x20\57\x3e\x3c\x21\x2d\x2d\r\n";
        return $_Oz0tr7toc0jnevyf7fc0l;
    }
    private function dww1m($_Oxtk6d4kmzgb99ns)
    {
        if ($this->IsTabIndexSet)
        {
            $_Oxtk6d4kmzgb99ns .= "\x20\x20\x20\55\55\x3e\x3c\x61\x20\150\162\145\146\75\"{$this->HelpLinkUrl}\"\x20\164\x69\164\154\x65\75\"{$this->HelpLinkText}\"\x20\164\x61\x62\151\156\144\x65\170\x3d\"{$this->_Ir74gtavaoxt4ibnxknajw5kt5}\"\x3e\74\151\155\x67\x20\x63\x6c\141\163\163\x3d\"\x42\104\103\x5f\103\x61\160\x74\x63\150\141\x49\155\141\x67\145\"\40\x69\x64\75\"{$this->_Iu5t7u5rpuau7e1sjkvw32fu73}\"\x20\x73\162\x63\75\"{$this->CaptchaImageUrl}\"\x20\x61\x6c\x74\x3d\"{$this->ImageTooltip}\"\x20\163\164\171\154\x65\75\"{$this->CaptchaImageStyleCss}\"\40\57\76\74\x2f\x61\x3e\74\x21\x2d\55\r\n";
            if (-1 != $this->_Ir74gtavaoxt4ibnxknajw5kt5)
            {
                $this->_Ir74gtavaoxt4ibnxknajw5kt5++;
            }
        }
        else
        {
            $_Oxtk6d4kmzgb99ns .= "\x20\x20\x20\x2d\x2d\x3e\74\141\40\x68\x72\x65\x66\x3d\"{$this->HelpLinkUrl}\"\40\x74\x69\x74\x6c\x65\75\"{$this->HelpLinkText}\"\x20\76\74\x69\155\x67\40\x63\x6c\141\163\163\x3d\"\102\104\103\137\103\141\160\x74\x63\150\x61\x49\x6d\141\147\145\"\40\x69\x64\75\"{$this->_Iu5t7u5rpuau7e1sjkvw32fu73}\"\x20\x73\x72\143\75\"{$this->CaptchaImageUrl}\"\x20\x61\154\164\x3d\"{$this->ImageTooltip}\"\x20\163\164\171\x6c\145\75\"{$this->CaptchaImageStyleCss}\"\40\57\x3e\74\x2f\x61\76\x3c\41\x2d\55\r\n";
        }
        return $_Oxtk6d4kmzgb99ns;
    }
    private function cizfx($_Okc0u92fzqop71oufygp8)
    {
        $_0ar62vb3gpca0berejff3 = $this->TotalHeight - $this->m127z();
        $_Okc0u92fzqop71oufygp8 .= "\x20\40\x20\x2d\55\x3e\74\144\x69\166\x20\143\x6c\x61\x73\x73\75\"\102\104\x43\137\103\141\x70\x74\x63\x68\141\111\x6d\141\x67\145\x44\x69\166\"\x20\163\164\x79\154\145\75\"\x77\x69\144\x74\x68\72{$this->ImageWidth}\x70\x78\x3b\40\150\x65\151\147\x68\164\x3a{$_0ar62vb3gpca0berejff3}\160\x78\73\"\x3e\x3c\x69\155\147\40\x63\154\141\x73\163\x3d\"\102\104\103\137\x43\141\160\164\x63\x68\141\x49\155\x61\x67\145\"\40\151\144\75\"{$this->_Iu5t7u5rpuau7e1sjkvw32fu73}\"\40\x73\162\x63\x3d\"{$this->CaptchaImageUrl}\"\x20\141\154\164\x3d\"{$this->ImageTooltip}\"\x20\x73\x74\x79\x6c\145\75\"{$this->CaptchaImageStyleCss}\"\x20\57\76\x3c\57\x64\x69\166\x3e\x3c\41\55\x2d\r\n";
        $_ldocokvllbwtu3tz1rmfyvqtz9 = $this->m127z();
        $_omovgc25zrt8ii0k6amelepl4l = $_ldocokvllbwtu3tz1rmfyvqtz9 - 1;
        if ($this->IsTabIndexSet)
        {
            $_Okc0u92fzqop71oufygp8 .= "\x20\x20\x20\55\x2d\x3e\74\141\40\x68\x72\145\x66\x3d\"{$this->HelpLinkUrl}\"\x20\x74\x61\x62\151\156\x64\x65\x78\x3d\"{$this->_Ir74gtavaoxt4ibnxknajw5kt5}\"\x20\164\x69\164\x6c\x65\x3d\"{$this->HelpLinkText}\"\x20\x73\164\171\154\145\75\"\x64\x69\x73\160\154\x61\171\72\x20\x62\154\x6f\x63\153\x20\x21\x69\155\160\157\162\164\141\x6e\164\x3b\40\150\145\x69\147\150\164\x3a\40{$_ldocokvllbwtu3tz1rmfyvqtz9}\160\170\40\41\x69\155\x70\x6f\162\164\x61\156\164\73\x20\155\141\162\147\151\x6e\72\x20\60\40\x21\151\155\160\x6f\162\x74\141\x6e\164\x3b\x20\x70\141\144\144\151\x6e\147\72\x20\60\40\41\151\155\x70\x6f\x72\164\141\156\164\73\40\146\157\x6e\164\x2d\163\151\x7a\x65\x3a\x20{$_omovgc25zrt8ii0k6amelepl4l}\160\170\40\41\151\155\160\157\x72\x74\141\156\164\73\x20\154\x69\x6e\x65\55\x68\x65\151\147\150\164\72\40{$_ldocokvllbwtu3tz1rmfyvqtz9}\160\170\40\x21\x69\x6d\160\x6f\x72\164\x61\156\x74\x3b\x20\x76\x69\163\151\142\x69\154\151\164\171\72\x20\166\x69\163\x69\x62\x6c\145\40\x21\x69\x6d\160\x6f\162\164\141\156\164\73\x20\146\157\156\x74\x2d\146\x61\155\151\x6c\x79\72\40\x56\145\x72\144\x61\156\141\54\40\104\x65\152\141\x56\165\x20\123\x61\156\163\x2c\40\102\x69\164\163\164\x72\x65\x61\x6d\40\x56\145\x72\x61\40\x53\141\x6e\163\x2c\40\126\x65\x72\x64\141\x6e\x61\x20\122\x65\x66\54\x20\x73\x61\x6e\163\55\163\x65\162\x69\x66\x20\41\151\x6d\160\x6f\162\164\141\156\x74\73\40\166\x65\x72\x74\151\143\x61\154\55\141\154\x69\x67\156\72\x20\x6d\x69\x64\144\x6c\x65\x20\x21\x69\x6d\x70\157\162\164\x61\x6e\x74\73\x20\164\145\170\164\x2d\x61\x6c\x69\147\156\72\40\143\x65\156\x74\145\x72\x20\x21\x69\155\x70\157\162\x74\141\x6e\164\x3b\40\x74\145\x78\x74\x2d\144\145\143\x6f\x72\x61\x74\151\157\156\72\x20\156\x6f\x6e\145\40\41\151\155\x70\157\x72\x74\141\x6e\x74\x3b\40\142\141\x63\153\147\162\x6f\x75\x6e\144\55\x63\157\x6c\157\162\x3a\x20\x23\x66\70\146\70\x66\x38\x20\x21\151\155\160\x6f\162\x74\x61\156\x74\73\x20\x63\x6f\154\157\x72\x3a\40\x23\x36\x30\66\60\66\x30\40\41\151\x6d\160\157\162\x74\141\x6e\x74\x3b\"\76{$this->HelpLinkText}\x3c\x2f\x61\76\74\x21\x2d\x2d\r\n";
            if (-1 != $this->_Ir74gtavaoxt4ibnxknajw5kt5)
            {
                $this->_Ir74gtavaoxt4ibnxknajw5kt5++;
            }
        }
        else
        {
            $_Okc0u92fzqop71oufygp8 .= "\x20\x20\x20\55\x2d\x3e\74\x61\40\150\x72\145\146\x3d\"{$this->HelpLinkUrl}\"\40\164\151\x74\154\x65\75\"{$this->HelpLinkText}\"\x20\163\x74\x79\154\145\x3d\"\x64\x69\x73\x70\154\x61\171\72\x20\142\x6c\x6f\143\x6b\x20\x21\x69\155\x70\157\x72\x74\141\156\164\73\x20\150\x65\151\x67\x68\164\72\x20{$_ldocokvllbwtu3tz1rmfyvqtz9}\160\x78\x20\41\151\x6d\160\157\x72\x74\141\x6e\x74\73\40\x6d\x61\x72\x67\151\x6e\72\x20\x30\x20\x21\x69\155\x70\157\162\x74\x61\x6e\x74\73\40\x70\141\x64\x64\x69\156\x67\x3a\40\60\40\41\x69\155\160\x6f\162\x74\141\156\164\x3b\40\x66\157\x6e\x74\x2d\163\x69\172\x65\x3a\x20{$_omovgc25zrt8ii0k6amelepl4l}\160\170\40\41\151\155\x70\x6f\162\x74\141\156\x74\x3b\40\x6c\x69\x6e\145\55\x68\x65\151\x67\x68\164\x3a\40{$_omovgc25zrt8ii0k6amelepl4l}\160\170\40\x21\151\x6d\x70\x6f\x72\164\x61\x6e\x74\73\40\166\151\163\151\x62\151\154\151\164\171\72\x20\x76\x69\163\x69\142\x6c\x65\x20\41\x69\155\x70\x6f\162\164\x61\x6e\164\73\x20\x66\157\156\x74\55\146\x61\x6d\x69\x6c\171\x3a\40\x56\145\162\144\141\156\141\54\x20\104\x65\x6a\141\126\165\40\123\141\x6e\163\54\x20\102\151\x74\x73\x74\162\x65\141\x6d\40\x56\145\x72\141\x20\x53\x61\156\163\54\x20\x56\145\162\144\141\156\x61\x20\x52\145\x66\x2c\40\x73\141\156\x73\x2d\x73\145\162\x69\146\40\x21\151\x6d\160\157\162\x74\x61\156\164\73\40\166\x65\x72\x74\x69\x63\141\154\55\141\x6c\x69\x67\x6e\x3a\40\x6d\151\x64\x64\x6c\145\x20\41\x69\155\x70\157\x72\x74\141\156\164\73\x20\164\145\170\x74\x2d\x61\x6c\x69\147\x6e\72\40\143\145\156\164\x65\x72\x20\41\x69\x6d\160\157\x72\164\141\156\164\73\40\164\x65\x78\164\55\x64\x65\143\157\162\141\x74\x69\157\x6e\72\x20\156\x6f\156\145\x20\41\151\155\160\157\x72\164\x61\156\x74\x3b\x20\x62\x61\143\153\x67\x72\157\165\x6e\x64\55\143\x6f\x6c\x6f\x72\x3a\40\43\x66\x38\x66\x38\146\x38\x20\41\x69\x6d\x70\157\x72\x74\141\x6e\x74\x3b\x20\143\x6f\154\x6f\x72\72\x20\x23\x36\x30\66\x30\x36\60\40\x21\151\x6d\160\157\162\164\141\156\x74\73\"\x3e{$this->HelpLinkText}\74\x2f\141\76\74\x21\x2d\x2d\r\n";
        }
        return $_Okc0u92fzqop71oufygp8;
    }
    private function uq1jk($_Otyr0xqsd8x290m1)
    {
        if ($this->RenderIcons)
        {
            $_Otyr0xqsd8x290m1 .= "\40\x2d\55\x3e\x3c\144\151\x76\40\x63\x6c\141\x73\163\75\"\x42\x44\103\137\x43\x61\160\x74\143\x68\141\111\143\x6f\156\163\104\x69\x76\"\x20\151\x64\75\"{$this->_Ovtxzyah0c5ctro4t3vrk}\x5f\x43\141\160\x74\143\150\141\x49\143\157\156\163\104\151\166\"\40\x73\x74\171\x6c\145\x3d\"\167\x69\144\164\x68\x3a\x20{$this->IconsDivWidth}\160\170\40\x21\x69\x6d\x70\x6f\162\164\141\x6e\164\x3b\"\76\74\41\55\x2d\r\n";
            if ($this->ReloadEnabled)
            {
                if ($this->IsTabIndexSet)
                {
                    $_Otyr0xqsd8x290m1 .= "\x20\x20\x20\55\55\x3e\74\141\x20\x63\x6c\141\x73\163\x3d\"\x42\104\103\x5f\122\145\x6c\x6f\x61\x64\x4c\x69\156\153\"\x20\x69\x64\75\"{$this->_Ovtxzyah0c5ctro4t3vrk}\x5f\122\x65\x6c\x6f\141\x64\x4c\151\156\x6b\"\40\150\162\145\146\75\"\43\"\x20\x74\x61\142\151\156\x64\x65\170\75\"{$this->_Ir74gtavaoxt4ibnxknajw5kt5}\"\40\164\151\164\154\x65\x3d\"{$this->ReloadTooltip}\"\x3e\74\151\155\147\x20\x63\154\x61\163\x73\x3d\"\x42\x44\103\x5f\x52\x65\x6c\157\141\144\x49\x63\157\x6e\"\x20\x69\144\x3d\"{$this->_Ovtxzyah0c5ctro4t3vrk}\137\122\x65\154\157\x61\x64\x49\143\x6f\x6e\"\40\163\162\x63\75\"{$this->ReloadIconUrl}\"\40\141\154\164\75\"{$this->ReloadTooltip}\"\x20\57\76\74\x2f\141\x3e\x3c\x21\x2d\55\r\n";
                    if (-1 != $this->_Ir74gtavaoxt4ibnxknajw5kt5)
                    {
                        $this->_Ir74gtavaoxt4ibnxknajw5kt5++;
                    }
                }
                else
                {
                    $_Otyr0xqsd8x290m1 .= "\x20\x20\x20\55\x2d\76\74\x61\x20\x63\x6c\x61\163\163\75\"\x42\x44\x43\137\122\145\154\x6f\x61\x64\114\x69\156\153\"\x20\x69\x64\75\"{$this->_Ovtxzyah0c5ctro4t3vrk}\x5f\x52\145\154\157\x61\x64\114\x69\x6e\x6b\"\x20\x68\x72\145\x66\75\"\x23\"\40\x74\151\164\x6c\145\75\"{$this->ReloadTooltip}\"\76\x3c\151\155\x67\x20\x63\154\x61\x73\163\75\"\102\x44\x43\x5f\122\x65\154\157\x61\144\111\x63\157\x6e\"\40\x69\x64\x3d\"{$this->_Ovtxzyah0c5ctro4t3vrk}\137\x52\x65\x6c\x6f\x61\144\111\x63\x6f\x6e\"\x20\x73\x72\143\x3d\"{$this->ReloadIconUrl}\"\40\x61\x6c\x74\75\"{$this->ReloadTooltip}\"\x20\x2f\x3e\x3c\x2f\141\76\74\41\x2d\55\r\n";
                }
            }
            $_Iib5emwmtu9l2nek = $this->CaptchaSoundUrl;
            if ($this->SoundEnabled)
            {
                if ($this->CaptchaSoundAvailable)
                {
                    if ($this->IsTabIndexSet)
                    {
                        $_Otyr0xqsd8x290m1 .= "\x20\40\x20\x2d\55\x3e\x3c\x61\40\162\145\154\x3d\"\x6e\157\146\157\x6c\x6c\x6f\x77\"\40\143\x6c\141\163\163\x3d\"\x42\104\103\x5f\x53\x6f\165\x6e\144\x4c\x69\156\153\"\x20\151\x64\x3d\"{$this->_Ovtxzyah0c5ctro4t3vrk}\137\x53\x6f\165\x6e\144\x4c\151\156\x6b\"\x20\150\x72\145\x66\x3d\"{$_Iib5emwmtu9l2nek}\"\40\x74\141\x62\x69\156\x64\x65\x78\x3d\"{$this->_Ir74gtavaoxt4ibnxknajw5kt5}\"\x20\40\164\x69\x74\x6c\145\x3d\"{$this->SoundTooltip}\"\x20\164\x61\x72\147\145\164\x3d\"\x5f\x62\154\141\156\153\"\x3e\74\x69\x6d\147\40\143\x6c\x61\163\x73\75\"\102\x44\103\x5f\123\x6f\x75\156\x64\x49\x63\157\156\"\40\x69\144\75\"{$this->_Ovtxzyah0c5ctro4t3vrk}\137\x53\x6f\x75\x6e\x64\111\x63\x6f\156\"\x20\x73\162\x63\75\"{$this->SoundIconUrl}\"\x20\x61\x6c\x74\x3d\"{$this->SoundTooltip}\"\40\57\76\74\57\141\x3e\74\x21\x2d\x2d\r\n";
                    }
                    else
                    {
                        $_Otyr0xqsd8x290m1 .= "\40\40\40\x2d\x2d\x3e\x3c\141\40\x72\145\x6c\x3d\"\x6e\x6f\146\157\154\154\x6f\167\"\40\x63\154\141\163\163\x3d\"\x42\104\103\137\123\157\165\156\144\x4c\x69\156\153\"\40\x69\x64\x3d\"{$this->_Ovtxzyah0c5ctro4t3vrk}\137\x53\x6f\x75\156\144\114\151\156\153\"\x20\150\162\x65\146\75\"{$_Iib5emwmtu9l2nek}\"\x20\164\x69\x74\154\x65\x3d\"{$this->SoundTooltip}\"\40\x74\x61\x72\147\x65\164\x3d\"\137\142\x6c\x61\156\153\"\x3e\x3c\x69\x6d\147\40\143\x6c\141\x73\163\75\"\102\x44\103\137\x53\x6f\x75\156\x64\x49\143\x6f\156\"\x20\151\144\x3d\"{$this->_Ovtxzyah0c5ctro4t3vrk}\x5f\x53\x6f\165\x6e\144\111\x63\x6f\156\"\x20\x73\162\x63\75\"{$this->SoundIconUrl}\"\x20\x61\x6c\164\75\"{$this->SoundTooltip}\"\x20\57\x3e\x3c\57\141\76\74\x21\x2d\55\r\n";
                    }
                }
                else if ($this
                    ->_ol9r98laxg81kqs3ycgukwbza0
                    ->WarnAboutMissingSoundPackages)
                {
                    $_Otyr0xqsd8x290m1 .= "\40\x20\40\55\55\x3e\x3c\x61\40\164\141\x72\147\x65\x74\x3d\"\x5f\x62\x6c\141\x6e\x6b\"\x20\143\x6c\141\163\x73\x3d\"\x42\x44\x43\137\x44\151\163\141\x62\x6c\145\144\114\x69\x6e\x6b\"\x20\151\x64\x3d\"{$this->_Ovtxzyah0c5ctro4t3vrk}\137\123\157\165\x6e\144\114\x69\156\153\"\40\150\162\145\146\75\"\43\"\x20\x74\141\x62\151\156\144\145\x78\75\"{$this->_Ir74gtavaoxt4ibnxknajw5kt5}\"\x3e\74\x69\x6d\147\x20\x63\x6c\141\x73\163\x3d\"\x42\x44\x43\137\123\157\165\156\x64\111\143\157\156\"\40\151\144\x3d\"{$this->_Ovtxzyah0c5ctro4t3vrk}\137\123\x6f\165\156\x64\x49\143\157\156\"\40\x73\x72\143\x3d\"{$this->SoundIconUrl}\"\40\141\154\x74\75\"\"\40\57\76\74\x73\x70\141\156\x3e{$this->SoundTooltip}\x3c\x2f\163\x70\141\x6e\76\x3c\x2f\141\x3e\74\x21\x2d\x2d\r\n";
                }
            }
            if ($this->SoundEnabled)
            {
                $_Otyr0xqsd8x290m1 .= "\40\40\x20\x2d\55\x3e\x3c\x64\151\x76\x20\x63\x6c\x61\x73\x73\x3d\"\x42\x44\103\137\120\154\x61\x63\x65\x68\x6f\154\144\145\x72\"\40\151\x64\x3d\"{$this->_Ovtxzyah0c5ctro4t3vrk}\137\101\165\144\151\157\x50\154\x61\x63\145\x68\157\154\144\x65\162\"\x3e\x26\156\x62\163\160\x3b\74\57\x64\151\x76\x3e\x3c\41\55\x2d\r\n";
            }
            $_Otyr0xqsd8x290m1 .= "\x20\x2d\x2d\76\x3c\x2f\x64\151\166\x3e\r\n";
        }
        return $_Otyr0xqsd8x290m1;
    }
    private function im7af($_1vt7yc3x6nver9vc9wt5a)
    {
        $_0yfohtc8canwb1zlp3905 = $this->AutoUppercaseInput ? "\164\x72\x75\145" : "\146\x61\x6c\163\x65";
        $_oitvtebyixyf2cvq = $this->AutoFocusInput ? "\164\x72\x75\145" : "\146\141\154\163\x65";
        $_Otf6n41sd3y3bp87pc42e = $this->AutoClearInput ? "\164\x72\x75\145" : "\146\x61\x6c\163\145";
        $_oprndjm0lt97nwtjozmwp3hqrv = $this->AutoReloadExpiredCaptchas ? "\164\162\x75\x65" : "\146\141\x6c\163\x65";
        $_ohqm55gx2up4sv9vy2c70om8ne = $this->CodeTimeout;
        $_luu0qk8x5lyae1w09he3hww2b2 = $this->AutoReloadTimeout;
        $_I5jztk8miczesff6qfovk63ztt = $this->SoundStartDelay;
        $_lzc4oqfllaibc2n6jct6gfgotz = ($this->SoundRegenerationMode == SoundRegenerationMode::Limited) ? "\x74\x72\x75\x65" : "\x66\x61\x6c\163\x65";
        if ($this->AddScriptInclude)
        {
            $_1vt7yc3x6nver9vc9wt5a .= $this->GetScriptIncludeMarkup();
        }
        $_1vt7yc3x6nver9vc9wt5a .= "\40\40\x20\x20\x3c\151\x6e\x70\x75\x74\40\x74\x79\x70\x65\x3d\"\150\151\144\x64\145\x6e\"\40\x6e\x61\x6d\145\x3d\"\x42\x44\103\137\x55\163\145\162\123\x70\x65\143\151\x66\151\x65\144\x43\141\x70\x74\x63\150\x61\x49\144\"\x20\151\144\x3d\"\102\x44\103\x5f\x55\x73\145\162\123\160\x65\143\x69\146\x69\145\x64\103\x61\160\164\x63\150\141\111\144\"\40\x76\141\x6c\165\x65\75\"{$this->_Ovtxzyah0c5ctro4t3vrk}\"\40\57\x3e\r\n";
        $_1vt7yc3x6nver9vc9wt5a .= "\40\x20\40\x20\x3c\151\x6e\x70\165\164\x20\x74\171\x70\x65\x3d\"\150\151\x64\144\x65\156\"\40\x6e\x61\x6d\x65\x3d\"{$this->_ovcomgsjv5yd5630onp1euprno}\"\x20\x69\x64\75\"{$this->_ovcomgsjv5yd5630onp1euprno}\"\40\x76\x61\154\x75\145\75\"{$this->InstanceId}\"\40\57\76\r\n";
        $_1vt7yc3x6nver9vc9wt5a .= "\x20\x20\40\40\x3c\x69\x6e\x70\x75\164\x20\x74\x79\x70\145\75\"\x68\x69\144\x64\x65\156\"\40\156\141\155\145\x3d\"\x42\104\x43\x5f\x42\x61\x63\153\x57\x6f\x72\153\x61\x72\x6f\165\x6e\144\137{$this->_Ovtxzyah0c5ctro4t3vrk}\"\x20\151\144\75\"\x42\104\103\x5f\x42\x61\x63\153\127\x6f\x72\153\141\162\x6f\x75\x6e\144\137{$this->_Ovtxzyah0c5ctro4t3vrk}\"\40\x76\141\x6c\165\145\x3d\"\60\"\x20\57\76\r\n";
        if ($this->UseM())
        {
            $_1vt7yc3x6nver9vc9wt5a .= "\40\40\40\x20\74\151\x6e\160\165\x74\x20\164\x79\x70\145\x3d\"\150\x69\144\144\x65\156\"\x20\x6e\141\155\145\75\"\102\x44\x43\x5f\x48\x73\x5f{$this->_Ovtxzyah0c5ctro4t3vrk}\"\40\151\144\x3d\"\x42\x44\103\137\x48\163\137{$this->_Ovtxzyah0c5ctro4t3vrk}\"\x20\166\x61\154\x75\x65\x3d\"{$this
                ->_Ip0ph4xsyb7i66bg
                ->GetHs() }\"\x20\x2f\x3e\r\n";
            $_1vt7yc3x6nver9vc9wt5a .= "\x20\40\40\x20\x3c\x69\156\160\x75\164\x20\164\171\x70\145\x3d\"\x68\151\x64\144\x65\156\"\40\x6e\x61\x6d\x65\x3d\"\102\104\103\137\x53\120\137{$this->_Ovtxzyah0c5ctro4t3vrk}\"\x20\151\x64\75\"\102\104\103\x5f\123\x50\x5f{$this->_Ovtxzyah0c5ctro4t3vrk}\"\x20\x76\x61\x6c\x75\145\x3d\"{$this
                ->_Ip0ph4xsyb7i66bg
                ->GetSP() }\"\40\57\76\r\n";
        }
        return $_1vt7yc3x6nver9vc9wt5a;
    }
    public static function IsFree()
    {
        return BDC_CaptchaBase::IsFree;
    }
    public static function GetProductInfo()
    {
        return BDC_CaptchaBase::$ProductInfo;
    }
    private function m127z()
    {
        return $this->HelpLinkHeight;
    }
    public static function LibInfo()
    {
        $_1g37ih7342phagu9 = '';
        $_1g37ih7342phagu9 .= BDC_CaptchaBase::$ProductInfo["\x6e\x61\x6d\x65"] . "\40\166\145\162\x73\x69\x6f\156\40" . BDC_CaptchaBase::$ProductInfo["\166\145\162\x73\151\x6f\x6e"];
        $_1g37ih7342phagu9 .= "\x20" . (BDC_CaptchaBase::IsFree ? "\106\x72\145\145" : "\105\x6e\x74\x65\x72\x70\162\151\x73\x65");
        $_1g37ih7342phagu9 .= "\x20\x6c\x6f\141\144\x65\x64\x20\x62\x79\x20\120\x48\120\40\x76\145\x72\163\151\x6f\x6e\40" . PHP_VERSION;
        return $_1g37ih7342phagu9;
    }
    public function __get($_Ounq4kf6b0r2ba2fdsrap)
    {
        if (method_exists($this->_1jrznqqgj5fxe5wbyqoen, ($_Om30lmz0quh2s75vem0hb = "\147\x65\164\137" . $_Ounq4kf6b0r2ba2fdsrap)))
        {
            return $this
                ->_1jrznqqgj5fxe5wbyqoen
                ->$_Om30lmz0quh2s75vem0hb();
        }
        else if (method_exists($this, ($_Om30lmz0quh2s75vem0hb = "\147\145\x74\x5f" . $_Ounq4kf6b0r2ba2fdsrap)))
        {
            return $this->$_Om30lmz0quh2s75vem0hb();
        }
        else return;
    }
    public function __isset($_Iqpfzlibo9uemmsk)
    {
        if (method_exists($this->_1jrznqqgj5fxe5wbyqoen, ($_1lv9ogxxe5opju6tx5f3xdvnrh = "\151\x73\x73\145\x74\x5f" . $_Iqpfzlibo9uemmsk)))
        {
            return $this
                ->_1jrznqqgj5fxe5wbyqoen
                ->$_1lv9ogxxe5opju6tx5f3xdvnrh();
        }
        else if (method_exists($this, ($_1lv9ogxxe5opju6tx5f3xdvnrh = "\151\x73\163\145\164\137" . $_Iqpfzlibo9uemmsk)))
        {
            return $this->$_1lv9ogxxe5opju6tx5f3xdvnrh();
        }
        else return;
    }
    public function __set($_Izwrc5q78bae3ffrs9jdw, $_od0airelflv8rc2o)
    {
        if (method_exists($this->_1jrznqqgj5fxe5wbyqoen, ($_izl20pqd26zwpj71s8f5h = "\163\x65\x74\137" . $_Izwrc5q78bae3ffrs9jdw)))
        {
            $this
                ->_1jrznqqgj5fxe5wbyqoen
                ->$_izl20pqd26zwpj71s8f5h($_od0airelflv8rc2o);
        }
        else if (method_exists($this, ($_izl20pqd26zwpj71s8f5h = "\x73\x65\x74\137" . $_Izwrc5q78bae3ffrs9jdw)))
        {
            $this->$_izl20pqd26zwpj71s8f5h($_od0airelflv8rc2o);
        }
    }
    public function __unset($_1iq2vwl2bfwfb8h3v7xv1)
    {
        if (method_exists($this->_1jrznqqgj5fxe5wbyqoen, ($_iac8g0wobo2e268z = "\x75\x6e\163\145\164\137" . $_1iq2vwl2bfwfb8h3v7xv1)))
        {
            $this
                ->_1jrznqqgj5fxe5wbyqoen
                ->$_iac8g0wobo2e268z();
        }
        else if (method_exists($this, ($_iac8g0wobo2e268z = "\165\156\x73\145\x74\137" . $_1iq2vwl2bfwfb8h3v7xv1)))
        {
            $this->$_iac8g0wobo2e268z();
        }
    }
} ?>
