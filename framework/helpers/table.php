<?php
function table($table)
{
    switch ($table) {
      // Main
      // CMS
        case 'cmsMain':
            return 'ShaiyaCMS.dbo.cms_main';
        case 'widgets':
            return 'ShaiyaCMS.dbo.cms_widgets';
      // Logs
        case 'donateOptions':
            return 'ShaiyaCMS.dbo.donate_options';
        case 'logAccess':
            return 'ShaiyaCMS.dbo.log_access';
        case 'logBossDeath':
            return 'ShaiyaCMS.dbo.log_boss_death';
        case 'logGmCommands':
            return 'ShaiyaCMS.dbo.log_gm_commands';
        case 'logPayments':
            return 'ShaiyaCMS.dbo.log_payments';
        case 'logSession':
            return 'ShaiyaCMS.dbo.log_session';
        // Users
        case 'webPresence':
            return 'ShaiyaCMS.dbo.web_presence';
        case 'shUserData':
            return 'PS_UserData.dbo.Users_Master';
        case 'shUserLoginStatus':
            return 'PS_UserData.dbo.UserLoginStatus';
        case 'userSocials':
            return 'ShaiyaCMS.dbo.user_socials';
        case 'userPrivacy':
            return 'ShaiyaCMS.dbo.user_privacy';
        // ACP
        // Main
        case 'news':
            return 'ShaiyaCMS.dbo.news';
        case 'patchNotes':
            return 'ShaiyaCMS.dbo.patch_notes';
        // Account Tools
        case 'banned':
            return 'ShaiyaCMS.dbo.banned';
        // Player Tools
        case 'shItems':
            return 'PS_GameDefs.dbo.Items';
        case 'shUmg':
            return 'PS_GameData.dbo.UserMaxGrow';
        case 'shUserBank':
            return 'PS_GameData.dbo.UserStoredPointItems';
        case 'shUserWh':
            return 'PS_GameData.dbo.UserStoredItems';
        // Misc Tools
        case 'shActionLog':
            return 'PS_GameLog.dbo.Actionlog';
        case 'shChatLog':
            return 'PS_ChatLog.dbo.Chatlog';
        case 'shCharData':
            return 'PS_GameData.dbo.Chars';
        case 'shCharSkills':
            return 'PS_GameData.dbo.CharSkills';
        case 'shCharApplySkills':
            return 'PS_GameData.dbo.CharApplySkills';
        case 'shCharItems':
            return 'PS_GameData.dbo.CharItems';
        case 'shGuilds':
            return 'PS_GameData.dbo.Guilds';
        case 'shGuildChars':
            return 'PS_GameData.dbo.GuildChars';
        case 'shGuildDetails':
            return 'PS_GameData.dbo.GuildDetails';
        case 'shUserProduct':
            return 'PS_Billing.dbo.Users_Product';
        case 'shMaps':
            return 'PS_GameDefs.dbo.MapNames';
        case 'shMobs':
            return 'PS_GameDefs.dbo.Mobs';
        case 'shMobItems':
            return 'PS_GameDefs.dbo.MobItems';
        case 'shSkills':
            return 'PS_GameDefs.dbo.Skills';
        case 'shPointLog':
            return 'PS_GameData.dbo.PointLog';
        case 'statPadders':
            return 'ShaiyaCMS.dbo.stat_padders';
        case 'tickets':
            return 'ShaiyaCMS.dbo.tickets';
        case 'messages':
            return 'ShaiyaCMS.dbo.messages';
        case 'promos':
            return 'ShaiyaCMS.dbo.promotion_codes';
        case 'promoLogs':
            return 'ShaiyaCMS.dbo.promotion_codes_logs';
        case 'pvpRewards':
            return 'ShaiyaCMS.dbo.pvp_rewards';
        // Drop Finder
        case 'dropFinder':
            return 'ShaiyaCMS.dbo.drop_finder';
        // Webmall
        case 'products':
            return 'ShaiyaCMS.dbo.products';
        case 'productDiscounts':
            return 'ShaiyaCMS.dbo.product_discounts';
        case 'orderHistory':
            return 'ShaiyaCMS.dbo.order_history';
        // Guildmall
        case 'g_products':
            return 'ShaiyaCMS.dbo.guild_products';
        // Vote
        case 'vote':
            return 'ShaiyaCMS.dbo.votes';
        case 'voteLogs':
            return 'ShaiyaCMS.dbo.vote_logs';
        // Event Calender
        case 'eventCalender':
            return 'ShaiyaCMS.dbo.events';
        // Tiered Spender
        case 'tieredSpender':
            return 'ShaiyaCMS.dbo.tiered_spender';
        case 'tieredRewards':
            return 'ShaiyaCMS.dbo.tiered_rewards';
        // Multi Currency
        case 'userPoints':
            return 'ShaiyaCMS.dbo.user_points';
        // Polls
        case 'polls':
            return 'ShaiyaCMS.dbo.polls';
        case 'pollOptions':
            return 'ShaiyaCMS.dbo.poll_options';
        case 'pollAnswers':
            return 'ShaiyaCMS.dbo.poll_answers';

    }
}
