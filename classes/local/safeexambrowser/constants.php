<?php
namespace mod_sebactivity\local\safeexambrowser;

class Constants {

    static function get_keys() {
        $config = [];
        $config["active"] = "active";
        $config["additionalResources"] = "additionalResources";
        $config["active"] = "active";
        $config["autoOpen"] = "autoOpen";
        $config["confirm"] = "confirm";
        $config["confirmText"] = "confirmText";
        $config["identifier"] = "identifier";
        $config["additionalResourcesIdentiﬁerCounter"] = "additionalResourcesIdentiﬁerCounter";
        $config["key"] = "key";
        $config["linkURL"] = "linkURL";
        $config["modifiers"] = "modifiers";
        $config["refererFilter"] = "refererFilter";
        $config["resetSession"] = "resetSession";
        $config["resourceData"] = "resourceData";
        $config["resourceDataFilename"] = "resourceDataFilename";
        $config["resourceDataLauncher"] = "resourceDataLauncher";
        $config["resourceIcons"] = "resourceIcons";
        $config["format"] = "format";
        $config["iconData"] = "iconData";
        $config["resolution"] = "resolution";
        $config["showButton"] = "showButton";
        $config["title"] = "title";
        $config["url"] = "url";
        $config["allowAudioCapture"] = "allowAudioCapture";
        $config["allowBrowsingBackForward"] = "allowBrowsingBackForward";
        $config["allowDictionaryLookup"] = "allowDictionaryLookup";
        $config["allowDisplayMirroring"] = "allowDisplayMirroring";
        $config["allowDownUploads"] = "allowDownUploads";
        $config["allowedDisplayBuiltin"] = "allowedDisplayBuiltin";
        $config["allowedDisplaysMaxNumber"] = "allowedDisplaysMaxNumber";
        $config["allowFlashFullscreen"] = "allowFlashFullscreen";
        $config["allowPDFPlugIn"] = "allowPDFPlugIn";
        $config["allowPreferencesWindow"] = "allowPreferencesWindow";
        $config["allowQuit"] = "allowQuit";
        $config["allowSpellCheck"] = "allowSpellCheck";
        $config["allowSwitchToApplications"] = "allowSwitchToApplications";
        $config["allowUserToChooseApp"] = "allowUserToChooseApp";
        $config["allowUserSwitching"] = "allowUserSwitching";
        $config["allowVideoCapture"] = "allowVideoCapture";
        $config["allowVirtualMachine"] = "allowVirtualMachine";
        $config["allowWlan"] = "allowWlan";
        $config["argument"] = "argument";
        $config["arguments"] = "arguments";
        $config[""] = "";
        $config["AutoConfigurationEnabled"] = "AutoConfigurationEnabled";
        $config["AutoConfigurationJavaScript"] = "AutoConfigurationJavaScript";
        $config["AutoConfigurationURL"] = "AutoConfigurationURL";
        $config[""] = "";
        $config["AutoDiscoveryEnabled"] = "AutoDiscoveryEnabled";
        $config["autostart"] = "autostart";
        $config["blockPopUpWindows"] = "blockPopUpWindows";
        $config["browserExamKey"] = "browserExamKey";
        $config["browserMessagingPingTime"] = "browserMessagingPingTime";
        $config["browserMessagingSocket"] = "browserMessagingSocket";
        $config["browserScreenKeyboard"] = "browserScreenKeyboard";
        $config["browserURLSalt"] = "browserURLSalt";
        $config["browserUserAgent"] = "browserUserAgent";
        $config["browserUserAgentWinDesktopMode"] = "browserUserAgentWinDesktopMode";
        $config["browserUserAgentWinDesktopModeCustom"] = "browserUserAgentWinDesktopModeCustom";
        $config["browserUserAgentMac"] = "browserUserAgentMac";
        $config["browserUserAgentMacCustom"] = "browserUserAgentMacCustom";
        $config["browserUserAgentWinTouchMode"] = "browserUserAgentWinTouchMode";
        $config["browserUserAgentWinTouchModeCustom"] = "browserUserAgentWinTouchModeCustom";
        $config["browserViewMode"] = "browserViewMode";
        $config["certificateData"] = "certificateData";
        $config["certificateDataWin"] = "certificateDataWin";
        $config["chooseFileToUploadPolicy"] = "chooseFileToUploadPolicy";
        $config["createNewDesktop"] = "createNewDesktop";
        $config["cryptoIdentity"] = "cryptoIdentity";
        $config["currentUser"] = "currentUser";
        $config["description"] = "description";
        $config["removeLocalStorage"] = "removeLocalStorage";
        $config["downloadAndOpenSebConfig"] = "downloadAndOpenSebConfig";
        $config["downloadDirectoryOSX"] = "downloadDirectoryOSX";
        $config["downloadDirectoryWin"] = "downloadDirectoryWin";
        $config["downloadPDFFiles"] = "downloadPDFFiles";
        $config["embeddedCertificates"] = "embeddedCertificates";
        $config["Enable"] = "Enable";
        $config["enableAltEsc"] = "enableAltEsc";
        $config["enableAltF4"] = "enableAltF4";
        $config["enableAltMouseWheel"] = "enableAltMouseWheel";
        $config["enableAltTab"] = "enableAltTab";
        $config["enableAppSwitcherCheck"] = "enableAppSwitcherCheck";
        $config["enableBrowserWindowToolbar"] = "enableBrowserWindowToolbar";
        $config["enableCtrlEsc"] = "enableCtrlEsc";
        $config["enableEsc"] = "enableEsc";
        $config["enableF1"] = "enableF1";
        $config["enableF10"] = "enableF10";
        $config["enableF11"] = "enableF11";
        $config["enableF12"] = "enableF12";
        $config["enableF2"] = "enableF2";
        $config["enableF3"] = "enableF3";
        $config["enableF4"] = "enableF4";
        $config["enableF5"] = "enableF5";
        $config["enableF6"] = "enableF6";
        $config["enableF7"] = "enableF7";
        $config["enableF8"] = "enableF8";
        $config["enableF9"] = "enableF9";
        $config["enableJava"] = "enableJava";
        $config["enableJavaScript"] = "enableJavaScript";
        $config["enableLogging"] = "enableLogging";
        $config["enablePlugIns"] = "enablePlugIns";
        $config["enablePrintScreen"] = "enablePrintScreen";
        $config["enableRightMouse"] = "enableRightMouse";
        $config["enableSebBrowser"] = "enableSebBrowser";
        $config["enableStartMenu"] = "enableStartMenu";
        $config["enableTouchExit"] = "enableTouchExit";
        $config["enableURLContentFilter"] = "enableURLContentFilter";
        $config["enableURLFilter"] = "enableURLFilter";
        $config["enableZoomPage"] = "enableZoomPage";
        $config["enableZoomText"] = "enableZoomText";
        $config["examKeySalt"] = "examKeySalt";
        $config["ExceptionsList"] = "ExceptionsList";
        $config["ExcludeSimpleHostnames"] = "ExcludeSimpleHostnames";
        $config["executable"] = "executable";
        $config["exitKey1"] = "exitKey1";
        $config["exitKey2"] = "exitKey2";
        $config["exitKey3"] = "exitKey3";
        $config["forceAppFolderInstall"] = "forceAppFolderInstall";
        $config["FTP"] = "FTP";
        $config["FTPEnable"] = "FTPEnable";
        $config["FTPProxy"] = "FTPProxy";
        $config["FTPPassive"] = "FTPPassive";
        $config["FTPPassword"] = "FTPPassword";
        $config["FTPPort"] = "FTPPort";
        $config["FTPRequiresPassword"] = "FTPRequiresPassword";
        $config["FTPUsername"] = "FTPUsername";
        $config["hashedAdminPassword"] = "hashedAdminPassword";
        $config["hashedQuitPassword"] = "hashedQuitPassword";
        $config["hideBrowserWindowToolbar"] = "hideBrowserWindowToolbar";
        $config["hookKeys"] = "hookKeys";
        $config["Proxy"] = "Proxy";
        $config["HTTP"] = "HTTP";
        $config["HTTPEnable"] = "HTTPEnable";
        $config["HTTPProxy"] = "HTTPProxy";
        $config["HTTPPassword"] = "HTTPPassword";
        $config["HTTPPort"] = "HTTPPort";
        $config["HTTPRequiresPassword"] = "HTTPRequiresPassword";
        $config["HTTPS"] = "HTTPS";
        $config["HTTPSEnable"] = "HTTPSEnable";
        $config["HTTPSProxy"] = "HTTPSProxy";
        $config["HTTPSPassword"] = "HTTPSPassword";
        $config["HTTPSPort"] = "HTTPSPort";
        $config["HTTPSRequiresPassword"] = "HTTPSRequiresPassword";
        $config["HTTPSUsername"] = "HTTPSUsername";
        $config["HTTPUsername"] = "HTTPUsername";
        $config["iconInTaskbar"] = "iconInTaskbar";
        $config["identifier"] = "identifier";
        $config["ignoreExitKeys"] = "ignoreExitKeys";
        $config["insideSebEnableChangeAPassword"] = "insideSebEnableChangeAPassword";
        $config["insideSebEnableEaseOfAccess"] = "insideSebEnableEaseOfAccess";
        $config["insideSebEnableLockThisComputer"] = "insideSebEnableLockThisComputer";
        $config["insideSebEnableLogOff"] = "insideSebEnableLogOff";
        $config["insideSebEnableEnableNetworkConnectionSelector"] = "insideSebEnableEnableNetworkConnectionSelector";
        $config["insideSebEnableShutDown"] = "insideSebEnableShutDown";
        $config["insideSebEnableStartTaskManager"] = "insideSebEnableStartTaskManager";
        $config["insideSebEnableSwitchUser"] = "insideSebEnableSwitchUser";
        $config["insideSebEnableVmWareClientShade"] = "insideSebEnableVmWareClientShade";
        $config["killExplorerShell"] = "killExplorerShell";
        $config["logDirectoryOSX"] = "logDirectoryOSX";
        $config["logDirectoryWin"] = "logDirectoryWin";
        $config["mainBrowserWindowHeight"] = "mainBrowserWindowHeight";
        $config["mainBrowserWindowPositioning"] = "mainBrowserWindowPositioning";
        $config["mainBrowserWindowWidth"] = "mainBrowserWindowWidth";
        $config["minMacOSVersion"] = "minMacOSVersion";
        $config["monitorProcesses"] = "monitorProcesses";
        $config["name"] = "name";
        $config["newBrowserWindowByLinkBlockForeign"] = "newBrowserWindowByLinkBlockForeign";
        $config["newBrowserWindowByLinkHeight"] = "newBrowserWindowByLinkHeight";
        $config["newBrowserWindowByLinkPolicy"] = "newBrowserWindowByLinkPolicy";
        $config["newBrowserWindowByLinkPositioning"] = "newBrowserWindowByLinkPositioning";
        $config["newBrowserWindowByLinkWidth"] = "newBrowserWindowByLinkWidth";
        $config["newBrowserWindowByScriptBlockForeign"] = "newBrowserWindowByScriptBlockForeign";
        $config["newBrowserWindowByScriptPolicy"] = "newBrowserWindowByScriptPolicy";
        $config["openDownloads"] = "openDownloads";
        $config["originalName"] = "originalName";
        $config["originatorVersion"] = "originatorVersion";
        $config["os"] = "os";
        $config["oskBehavior"] = "oskBehavior";
        $config["Password"] = "Password";
        $config["path"] = "path";
        $config["permittedProcesses"] = "permittedProcesses";
        $config["Port"] = "Port";
        $config["prohibitedProcesses"] = "prohibitedProcesses";
        $config["proxies"] = "proxies";
        $config["proxySettingsPolicy"] = "proxySettingsPolicy";
        $config["quitURL"] = "quitURL";
        $config["removeBrowserProfile"] = "removeBrowserProfile";
        $config["RequiresPassword"] = "RequiresPassword";
        $config["restartExamPasswordProtected"] = "restartExamPasswordProtected";
        $config["restartExamText"] = "restartExamText";
        $config["restartExamURL"] = "restartExamURL";
        $config["restartExamUseStartURL"] = "restartExamUseStartURL";
        $config["RTSP"] = "RTSP";
        $config["RTSPEnable"] = "RTSPEnable";
        $config["RTSPProxy"] = "RTSPProxy";
        $config["RTSPPassword"] = "RTSPPassword";
        $config["RTSPPort"] = "RTSPPort";
        $config["RTSPRequiresPassword"] = "RTSPRequiresPassword";
        $config["RTSPUsername"] = "RTSPUsername";
        $config["runInBackground"] = "runInBackground";
        $config["sebConfigPurpose"] = "sebConfigPurpose";
        $config["sebMode"] = "sebMode";
        $config["sebServerURL"] = "sebServerURL";
        $config["sebServicePolicy"] = "sebServicePolicy";
        $config["sendBrowserExamKey"] = "sendBrowserExamKey";
        $config["showInputLanguage"] = "showInputLanguage";
        $config["showMenuBar"] = "showMenuBar";
        $config["showReloadButton"] = "showReloadButton";
        $config["showReloadWarning"] = "showReloadWarning";
        $config["showTaskBar"] = "showTaskBar";
        $config["showTime"] = "showTime";
        $config["SOCKS"] = "SOCKS";
        $config["SOCKSEnable"] = "SOCKSEnable";
        $config["SOCKSProxy"] = "SOCKSProxy";
        $config["SOCKSPassword"] = "SOCKSPassword";
        $config["SOCKSPort"] = "SOCKSPort";
        $config["SOCKSRequiresPassword"] = "SOCKSRequiresPassword";
        $config["SOCKSUsername"] = "SOCKSUsername";
        $config["startURL"] = "startURL";
        $config["strongKill"] = "strongKill";
        $config["taskBarHeight"] = "taskBarHeight";
        $config["title"] = "title";
        $config["touchOptimized"] = "touchOptimized";
        $config["type"] = "type";
        $config["blacklistURLFilter"] = "blacklistURLFilter";
        $config["URLFilterEnable"] = "URLFilterEnable";
        $config["URLFilterEnableContentFilter"] = "URLFilterEnableContentFilter";
        $config["URLFilterRules"] = "URLFilterRules";
        $config["urlFilterRegex"] = "urlFilterRegex";
        $config["urlFilterTrustedContent"] = "urlFilterTrustedContent";
        $config["whitelistURLFilter"] = "whitelistURLFilter";
        $config["user"] = "user";
        $config["Username"] = "Username";
        $config["windowHandlingProcess"] = "windowHandlingProcess";
        $config["zoomMode"] = "zoomMode";
        return $config;
    }


}