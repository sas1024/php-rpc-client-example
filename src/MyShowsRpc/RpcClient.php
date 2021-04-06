<?php
/**
* PHP RPC Client by rpcgen
* @date 06.04.2021 17:37
*/

namespace MyShowsRpc;

	use EazyJsonRpc\BaseJsonRpcClient;
    use EazyJsonRpc\BaseJsonRpcException;
    use GuzzleHttp\Exception\GuzzleException;
    use JsonMapper_Exception;

	
	/** ApiAchievement **/
	class ApiAchievement { 
	    /**
	    * @var string
	    */
	    public $achievedAt;
	    /**
	    * @var string
	    */
	    public $alias;
	    /**
	    * @var string
	    */
	    public $description;
	    /**
	    * @var ApiAchievementFriend[]
	    */
	    public $friends;
	    /**
	    * @var string
	    */
	    public $image;
	    /**
	    * @var string
	    */
	    public $key;
	    /**
	    * @var float
	    */
	    public $percentAwarded;
	    /**
	    * @var string
	    */
	    public $title;
	    /**
	    * @var int
	    */
	    public $totalAwarded;
	}
	
	/** ApiAchievementFriend **/
	class ApiAchievementFriend { 
	    /**
	    * @var string
	    */
	    public $achievedAt;
	    /**
	    * @var ApiUser
	    */
	    public $user;
	}
	
	/** ApiAchievementSummary **/
	class ApiAchievementSummary { 
	    /**
	    * @var string
	    */
	    public $achievedAt;
	    /**
	    * @var string
	    */
	    public $alias;
	    /**
	    * @var string
	    */
	    public $description;
	    /**
	    * @var string
	    */
	    public $image;
	    /**
	    * @var string
	    */
	    public $key;
	    /**
	    * @var int
	    */
	    public $level;
	    /**
	    * @var string
	    */
	    public $title;
	}
	
	/** ApiAvatarValue **/
	class ApiAvatarValue { 
	    /**
	    * @var bool
	    */
	    public $isDisabled;
	    /**
	    * @var string
	    */
	    public $title;
	    /**
	    * @var string
	    */
	    public $url;
	    /**
	    * @var string
	    */
	    public $value;
	}
	
	/** ApiAward **/
	class ApiAward { 
	    /**
	    * @var string
	    */
	    public $alias;
	    /**
	    * @var string
	    */
	    public $content;
	    /**
	    * @var string
	    */
	    public $country;
	    /**
	    * @var string
	    */
	    public $description;
	    /**
	    * @var int
	    */
	    public $id;
	    /**
	    * @var string
	    */
	    public $image;
	    /**
	    * @var string
	    */
	    public $title;
	    /**
	    * @var string
	    */
	    public $url;
	    /**
	    * @var string
	    */
	    public $vfsImage;
	    /**
	    * @var string
	    */
	    public $years;
	}
	
	/** ApiAwardCategory **/
	class ApiAwardCategory { 
	    /**
	    * @var int
	    */
	    public $awardId;
	    /**
	    * @var int
	    */
	    public $categoryId;
	    /**
	    * @var bool
	    */
	    public $isUserVoted;
	    /**
	    * @var ApiUserAwardShow[]
	    */
	    public $nominants;
	    /**
	    * @var string
	    */
	    public $title;
	    /**
	    * @var ApiUserAwardShow[]
	    */
	    public $winners;
	    /**
	    * @var int
	    */
	    public $year;
	}
	
	/** ApiAwardData **/
	class ApiAwardData { 
	    /**
	    * @var ApiAward
	    */
	    public $award;
	    /**
	    * @var ApiAwardCategory[]
	    */
	    public $categories;
	    /**
	    * @var bool
	    */
	    public $isUserVoteActive;
	    /**
	    * @var bool
	    */
	    public $isUserVoteFinished;
	    /**
	    * @var int
	    */
	    public $year;
	    /**
	    * @var array
	    */
	    public $years;
	}
	
	/** ApiAwardListItem **/
	class ApiAwardListItem { 
	    /**
	    * @var string
	    */
	    public $alias;
	    /**
	    * @var int
	    */
	    public $id;
	    /**
	    * @var string
	    */
	    public $title;
	}
	
	/** ApiAwardSummary **/
	class ApiAwardSummary { 
	    /**
	    * @var string
	    */
	    public $alias;
	    /**
	    * @var string
	    */
	    public $country;
	    /**
	    * @var string
	    */
	    public $description;
	    /**
	    * @var int
	    */
	    public $id;
	    /**
	    * @var string
	    */
	    public $image;
	    /**
	    * @var string
	    */
	    public $title;
	    /**
	    * @var string
	    */
	    public $url;
	    /**
	    * @var string
	    */
	    public $vfsImage;
	    /**
	    * @var string
	    */
	    public $years;
	}
	
	/** ApiBranding **/
	class ApiBranding { 
	    /**
	    * @var string
	    */
	    public $campaign;
	    /**
	    * @var string
	    */
	    public $image;
	    /**
	    * @var bool
	    */
	    public $isExternal;
	    /**
	    * @var string
	    */
	    public $tracking;
	    /**
	    * @var string
	    */
	    public $url;
	}
	
	/** ApiChangeRequest **/
	class ApiChangeRequest { 
	    /**
	    * @var string
	    */
	    public $comment;
	    /**
	    * @var int
	    */
	    public $id;
	    /**
	    * @var bool
	    */
	    public $isMyRequest;
	    /**
	    * @var string
	    */
	    public $newValue;
	    /**
	    * @var string
	    */
	    public $proofLink;
	    /**
	    * @var string
	    */
	    public $requestDate;
	    /**
	    * @var string
	    */
	    public $requestType;
	    /**
	    * @var string
	    */
	    public $status;
	}
	
	/** ApiCommentReportReason **/
	class ApiCommentReportReason { 
	    /**
	    * @var string
	    */
	    public $id;
	    /**
	    * @var string
	    */
	    public $title;
	}
	
	/** ApiCounters **/
	class ApiCounters { 
	    /**
	    * @var int
	    */
	    public $newAchievements;
	    /**
	    * @var int
	    */
	    public $newCommentReplies;
	    /**
	    * @var int
	    */
	    public $unwatchedEpisodes;
	}
	
	/** ApiEpisode **/
	class ApiEpisode { 
	    /**
	    * @var string
	    */
	    public $airDate;
	    /**
	    * @var string
	    */
	    public $airDateUTC;
	    /**
	    * @var int
	    */
	    public $commentsCount;
	    /**
	    * @var int
	    */
	    public $episodeNumber;
	    /**
	    * @var string
	    */
	    public $externalUrl;
	    /**
	    * @var int
	    */
	    public $id;
	    /**
	    * @var string
	    */
	    public $image;
	    /**
	    * @var array
	    */
	    public $images;
	    /**
	    * @var bool
	    */
	    public $isSpecial;
	    /**
	    * @var ApiOnlineEmbed
	    */
	    public $onlineEmbed;
	    /**
	    * @var ApiOnlineLink
	    */
	    public $onlineLinkExclusive;
	    /**
	    * @var ApiOnlineLink[]
	    */
	    public $onlineLinks;
	    /**
	    * @var string
	    */
	    public $productionNumber;
	    /**
	    * @var ApiEpisodeRating
	    */
	    public $rating;
	    /**
	    * @var int
	    */
	    public $seasonNumber;
	    /**
	    * @var int
	    */
	    public $sequenceNumber;
	    /**
	    * @var string
	    */
	    public $shortName;
	    /**
	    * @var int
	    */
	    public $showId;
	    /**
	    * @var string
	    */
	    public $title;
	    /**
	    * @var int
	    */
	    public $totalWatched;
	    /**
	    * @var float
	    */
	    public $totalWatchedPercent;
	}
	
	/** ApiEpisodeListItem **/
	class ApiEpisodeListItem { 
	    /**
	    * @var ApiEpisodeSummary
	    */
	    public $episode;
	    /**
	    * @var int
	    */
	    public $episodeOnlineCount;
	    /**
	    * @var int
	    */
	    public $runtime;
	    /**
	    * @var ApiShowSummary
	    */
	    public $show;
	}
	
	/** ApiEpisodeRating **/
	class ApiEpisodeRating { 
	    /**
	    * @var int
	    */
	    public $episodeId;
	    /**
	    * @var int
	    */
	    public $r1;
	    /**
	    * @var int
	    */
	    public $r2;
	    /**
	    * @var int
	    */
	    public $r3;
	    /**
	    * @var int
	    */
	    public $r4;
	    /**
	    * @var int
	    */
	    public $r5;
	    /**
	    * @var float
	    */
	    public $rating;
	    /**
	    * @var int
	    */
	    public $showId;
	    /**
	    * @var int
	    */
	    public $votes;
	}
	
	/** ApiEpisodeRatingInfo **/
	class ApiEpisodeRatingInfo { 
	    /**
	    * @var int
	    */
	    public $episodeId;
	    /**
	    * @var int
	    */
	    public $episodeNumber;
	    /**
	    * @var bool
	    */
	    public $isSpecial;
	    /**
	    * @var float
	    */
	    public $rating;
	    /**
	    * @var int
	    */
	    public $seasonNumber;
	    /**
	    * @var int
	    */
	    public $votes;
	}
	
	/** ApiEpisodeSummary **/
	class ApiEpisodeSummary { 
	    /**
	    * @var string
	    */
	    public $airDate;
	    /**
	    * @var string
	    */
	    public $airDateUTC;
	    /**
	    * @var int
	    */
	    public $commentsCount;
	    /**
	    * @var int
	    */
	    public $episodeNumber;
	    /**
	    * @var int
	    */
	    public $id;
	    /**
	    * @var string
	    */
	    public $image;
	    /**
	    * @var array
	    */
	    public $images;
	    /**
	    * @var bool
	    */
	    public $isSpecial;
	    /**
	    * @var int
	    */
	    public $seasonNumber;
	    /**
	    * @var string
	    */
	    public $shortName;
	    /**
	    * @var int
	    */
	    public $showId;
	    /**
	    * @var string
	    */
	    public $title;
	}
	
	/** ApiFeed **/
	class ApiFeed { 
	    /**
	    * @var ApiAchievementSummary
	    */
	    public $achievement;
	    /**
	    * @var ApiUser
	    */
	    public $affectedUser;
	    /**
	    * @var int
	    */
	    public $commentId;
	    /**
	    * @var string
	    */
	    public $createdAt;
	    /**
	    * @var ApiEpisodeSummary[]
	    */
	    public $episodes;
	    /**
	    * @var int
	    */
	    public $id;
	    /**
	    * @var int
	    */
	    public $rating;
	    /**
	    * @var ApiShowSummary
	    */
	    public $show;
	    /**
	    * @var string
	    */
	    public $showStatus;
	    /**
	    * @var string
	    */
	    public $type;
	    /**
	    * @var ApiUser
	    */
	    public $user;
	}
	
	/** ApiFilteredEpisodes **/
	class ApiFilteredEpisodes { 
	    /**
	    * @var ApiEpisodeSummary[]
	    */
	    public $episodes;
	    /**
	    * @var ApiShowFilter[]
	    */
	    public $filters;
	}
	
	/** ApiFriendship **/
	class ApiFriendship { 
	    /**
	    * @var bool
	    */
	    public $isFollower;
	    /**
	    * @var bool
	    */
	    public $isFriend;
	}
	
	/** ApiGenre **/
	class ApiGenre { 
	    /**
	    * @var int
	    */
	    public $id;
	    /**
	    * @var string
	    */
	    public $title;
	}
	
	/** ApiGenreDistribution **/
	class ApiGenreDistribution { 
	    /**
	    * @var int
	    */
	    public $Count;
	    /**
	    * @var float
	    */
	    public $Percent;
	    /**
	    * @var string
	    */
	    public $Title;
	}
	
	/** ApiMetaApps **/
	class ApiMetaApps { 
	    /**
	    * @var string
	    */
	    public $facebook;
	    /**
	    * @var string
	    */
	    public $itunes;
	}
	
	/** ApiMetaDetail **/
	class ApiMetaDetail { 
	    /**
	    * @var ApiMetaApps
	    */
	    public $apps;
	    /**
	    * @var string
	    */
	    public $backgroundImage;
	    /**
	    * @var ApiBranding
	    */
	    public $branding;
	    /**
	    * @var string
	    */
	    public $image;
	    /**
	    * @var bool
	    */
	    public $isProfile;
	    /**
	    * @var string
	    */
	    public $metaDescription;
	    /**
	    * @var string
	    */
	    public $metaKeywords;
	    /**
	    * @var ApiMetaOpenGraph
	    */
	    public $openGraph;
	    /**
	    * @var string
	    */
	    public $pageTitle;
	    /**
	    * @var string
	    */
	    public $robots;
	    /**
	    * @var bool
	    */
	    public $staticPage;
	    /**
	    * @var ApiMetaTwitter
	    */
	    public $twitter;
	    /**
	    * @var ApiMetaVerification
	    */
	    public $verification;
	}
	
	/** ApiMetaOpenGraph **/
	class ApiMetaOpenGraph { 
	    /**
	    * @var string
	    */
	    public $description;
	    /**
	    * @var string
	    */
	    public $image;
	    /**
	    * @var string
	    */
	    public $site;
	    /**
	    * @var string
	    */
	    public $title;
	    /**
	    * @var string
	    */
	    public $type;
	    /**
	    * @var string
	    */
	    public $url;
	}
	
	/** ApiMetaTwitter **/
	class ApiMetaTwitter { 
	    /**
	    * @var string
	    */
	    public $card;
	    /**
	    * @var string
	    */
	    public $description;
	    /**
	    * @var string
	    */
	    public $image;
	    /**
	    * @var string
	    */
	    public $site;
	    /**
	    * @var string
	    */
	    public $title;
	}
	
	/** ApiMetaVerification **/
	class ApiMetaVerification { 
	    /**
	    * @var string
	    */
	    public $google;
	    /**
	    * @var string
	    */
	    public $yandex;
	}
	
	/** ApiNetwork **/
	class ApiNetwork { 
	    /**
	    * @var string
	    */
	    public $country;
	    /**
	    * @var int
	    */
	    public $id;
	    /**
	    * @var string
	    */
	    public $title;
	}
	
	/** ApiNewComment **/
	class ApiNewComment { 
	    /**
	    * @var int
	    */
	    public $count;
	    /**
	    * @var ApiEpisodeSummary
	    */
	    public $episode;
	    /**
	    * @var int
	    */
	    public $id;
	    /**
	    * @var ApiShowSummary
	    */
	    public $show;
	}
	
	/** ApiNewEpisodeComments **/
	class ApiNewEpisodeComments { 
	    /**
	    * @var int
	    */
	    public $EpisodeID;
	    /**
	    * @var int
	    */
	    public $MaxUserCommentID;
	    /**
	    * @var int
	    */
	    public $Total;
	}
	
	/** ApiNewNewsComment **/
	class ApiNewNewsComment { 
	    /**
	    * @var int
	    */
	    public $count;
	    /**
	    * @var int
	    */
	    public $id;
	    /**
	    * @var ApiNewsSummary
	    */
	    public $news;
	}
	
	/** ApiNews **/
	class ApiNews { 
	    /**
	    * @var string
	    */
	    public $alias;
	    /**
	    * @var ApiNewsAuthor
	    */
	    public $author;
	    /**
	    * @var ApiNewsCategory
	    */
	    public $category;
	    /**
	    * @var int
	    */
	    public $commentsNew;
	    /**
	    * @var int
	    */
	    public $commentsTotal;
	    /**
	    * @var string
	    */
	    public $content;
	    /**
	    * @var string
	    */
	    public $foreword;
	    /**
	    * @var int
	    */
	    public $id;
	    /**
	    * @var string
	    */
	    public $image;
	    /**
	    * @var array
	    */
	    public $images;
	    /**
	    * @var string
	    */
	    public $mediaSource;
	    /**
	    * @var string
	    */
	    public $publishedAt;
	    /**
	    * @var ApiNewsTag[]
	    */
	    public $tags;
	    /**
	    * @var string
	    */
	    public $title;
	    /**
	    * @var string
	    */
	    public $video;
	}
	
	/** ApiNewsAuthor **/
	class ApiNewsAuthor { 
	    /**
	    * @var string
	    */
	    public $anchor;
	    /**
	    * @var string
	    */
	    public $href;
	    /**
	    * @var bool
	    */
	    public $targetBlank;
	}
	
	/** ApiNewsCategory **/
	class ApiNewsCategory { 
	    /**
	    * @var string
	    */
	    public $alias;
	    /**
	    * @var string
	    */
	    public $title;
	}
	
	/** ApiNewsComment **/
	class ApiNewsComment { 
	    /**
	    * @var string
	    */
	    public $comment;
	    /**
	    * @var string
	    */
	    public $createdAt;
	    /**
	    * @var string
	    */
	    public $editableTill;
	    /**
	    * @var int
	    */
	    public $id;
	    /**
	    * @var string
	    */
	    public $image;
	    /**
	    * @var bool
	    */
	    public $isBad;
	    /**
	    * @var bool
	    */
	    public $isDeleted;
	    /**
	    * @var bool
	    */
	    public $isEditable;
	    /**
	    * @var bool
	    */
	    public $isMyComment;
	    /**
	    * @var bool
	    */
	    public $isMyMinus;
	    /**
	    * @var bool
	    */
	    public $isMyPlus;
	    /**
	    * @var bool
	    */
	    public $isNew;
	    /**
	    * @var string
	    */
	    public $language;
	    /**
	    * @var ApiNewsSummary
	    */
	    public $news;
	    /**
	    * @var int
	    */
	    public $newsId;
	    /**
	    * @var int
	    */
	    public $parentId;
	    /**
	    * @var int
	    */
	    public $rating;
	    /**
	    * @var int
	    */
	    public $statusId;
	    /**
	    * @var ApiUser
	    */
	    public $user;
	}
	
	/** ApiNewsCommentsResponse **/
	class ApiNewsCommentsResponse { 
	    /**
	    * @var ApiNewsComment[]
	    */
	    public $comments;
	    /**
	    * @var int
	    */
	    public $count;
	    /**
	    * @var bool
	    */
	    public $hasSpoilers;
	    /**
	    * @var bool
	    */
	    public $isTracking;
	    /**
	    * @var int
	    */
	    public $newCount;
	}
	
	/** ApiNewsSearch **/
	class ApiNewsSearch { 
	    /**
	    * @var string
	    */
	    public $category;
	    /**
	    * @var int
	    */
	    public $episodeId;
	    /**
	    * @var bool
	    */
	    public $forCurrentUser;
	    /**
	    * @var bool
	    */
	    public $isTrailer;
	    /**
	    * @var int
	    */
	    public $showId;
	    /**
	    * @var int
	    */
	    public $similarNewsId;
	    /**
	    * @var string
	    */
	    public $tag;
	}
	
	/** ApiNewsSummary **/
	class ApiNewsSummary { 
	    /**
	    * @var string
	    */
	    public $alias;
	    /**
	    * @var ApiNewsAuthor
	    */
	    public $author;
	    /**
	    * @var int
	    */
	    public $commentsNew;
	    /**
	    * @var int
	    */
	    public $commentsTotal;
	    /**
	    * @var string
	    */
	    public $foreword;
	    /**
	    * @var int
	    */
	    public $id;
	    /**
	    * @var string
	    */
	    public $image;
	    /**
	    * @var array
	    */
	    public $images;
	    /**
	    * @var string
	    */
	    public $publishedAt;
	    /**
	    * @var string
	    */
	    public $title;
	    /**
	    * @var string
	    */
	    public $video;
	}
	
	/** ApiNewsTag **/
	class ApiNewsTag { 
	    /**
	    * @var string
	    */
	    public $alias;
	    /**
	    * @var string
	    */
	    public $title;
	}
	
	/** ApiNoteSearch **/
	class ApiNoteSearch { 
	    /**
	    * @var bool
	    */
	    public $isEpisode;
	    /**
	    * @var bool
	    */
	    public $isShow;
	}
	
	/** ApiNoteSummary **/
	class ApiNoteSummary { 
	    /**
	    * @var string
	    */
	    public $createdAt;
	    /**
	    * @var ApiEpisodeSummary
	    */
	    public $episode;
	    /**
	    * @var int
	    */
	    public $id;
	    /**
	    * @var ApiShowSummary
	    */
	    public $show;
	    /**
	    * @var string
	    */
	    public $text;
	}
	
	/** ApiOnlineEmbed **/
	class ApiOnlineEmbed { 
	    /**
	    * @var string
	    */
	    public $embedDesktop;
	    /**
	    * @var string
	    */
	    public $embedMobile;
	    /**
	    * @var string
	    */
	    public $sourceName;
	    /**
	    * @var string
	    */
	    public $sourceUrl;
	}
	
	/** ApiOnlineEpisode **/
	class ApiOnlineEpisode { 
	    /**
	    * @var string
	    */
	    public $airDate;
	    /**
	    * @var int
	    */
	    public $id;
	    /**
	    * @var string
	    */
	    public $image;
	    /**
	    * @var array
	    */
	    public $images;
	    /**
	    * @var string
	    */
	    public $onlineEmbed;
	    /**
	    * @var string
	    */
	    public $shortName;
	    /**
	    * @var ApiShowSummary
	    */
	    public $show;
	    /**
	    * @var string
	    */
	    public $title;
	}
	
	/** ApiOnlineLink **/
	class ApiOnlineLink { 
	    /**
	    * @var string
	    */
	    public $description;
	    /**
	    * @var string
	    */
	    public $source;
	    /**
	    * @var string
	    */
	    public $title;
	    /**
	    * @var string
	    */
	    public $url;
	}
	
	/** ApiParamError **/
	class ApiParamError { 
	    /**
	    * @var string
	    */
	    public $error;
	    /**
	    * @var string
	    */
	    public $param;
	}
	
	/** ApiPaymentType **/
	class ApiPaymentType { 
	    /**
	    * @var string
	    */
	    public $alias;
	    /**
	    * @var string
	    */
	    public $title;
	}
	
	/** ApiPreview **/
	class ApiPreview { 
	    /**
	    * @var ApiEpisodeListItem[]
	    */
	    public $episodes;
	    /**
	    * @var int
	    */
	    public $newAchievementsCount;
	    /**
	    * @var int
	    */
	    public $newCommentRepliesCount;
	    /**
	    * @var int
	    */
	    public $unwatchedEpisodesCount;
	    /**
	    * @var int
	    */
	    public $unwatchedShowsCount;
	}
	
	/** ApiProduct **/
	class ApiProduct { 
	    /**
	    * @var string
	    */
	    public $alias;
	    /**
	    * @var float
	    */
	    public $amount;
	    /**
	    * @var string
	    */
	    public $currency;
	    /**
	    * @var string
	    */
	    public $expectedPaidTill;
	    /**
	    * @var float
	    */
	    public $oldAmount;
	    /**
	    * @var string
	    */
	    public $title;
	}
	
	/** ApiRatings **/
	class ApiRatings { 
	    /**
	    * @var ApiAwardSummary[]
	    */
	    public $awards;
	    /**
	    * @var ApiShowSummary[]
	    */
	    public $popularShows;
	    /**
	    * @var ApiShowSummary[]
	    */
	    public $trendyShows;
	}
	
	/** ApiRole **/
	class ApiRole { 
	    /**
	    * @var array
	    */
	    public $images;
	    /**
	    * @var string
	    */
	    public $name;
	    /**
	    * @var int
	    */
	    public $personId;
	    /**
	    * @var string
	    */
	    public $role;
	    /**
	    * @var int
	    */
	    public $roleId;
	    /**
	    * @var int
	    */
	    public $showId;
	}
	
	/** ApiSeason **/
	class ApiSeason { 
	    /**
	    * @var int
	    */
	    public $airedEpisodesCount;
	    /**
	    * @var string
	    */
	    public $datePublished;
	    /**
	    * @var ApiEpisode[]
	    */
	    public $episodes;
	    /**
	    * @var ApiUserRating[]
	    */
	    public $friendsRatings;
	    /**
	    * @var array
	    */
	    public $ignoredEpisodes;
	    /**
	    * @var ApiNewEpisodeComments[]
	    */
	    public $newShowComments;
	    /**
	    * @var ApiNews[]
	    */
	    public $news;
	    /**
	    * @var float
	    */
	    public $rating;
	    /**
	    * @var int
	    */
	    public $seasonNumber;
	    /**
	    * @var ApiShowSummary
	    */
	    public $show;
	    /**
	    * @var ApiUserComment[]
	    */
	    public $topSeasonComments;
	    /**
	    * @var ApiSeasonRatingInfo[]
	    */
	    public $topSeasons;
	    /**
	    * @var int
	    */
	    public $totalNews;
	    /**
	    * @var int
	    */
	    public $totalVideos;
	    /**
	    * @var int
	    */
	    public $totalWatched;
	    /**
	    * @var int
	    */
	    public $totalWatchedPercent;
	    /**
	    * @var float
	    */
	    public $userRating;
	    /**
	    * @var array
	    */
	    public $userWatchedEpisodes;
	    /**
	    * @var ApiNews[]
	    */
	    public $videos;
	    /**
	    * @var int
	    */
	    public $votes;
	    /**
	    * @var string
	    */
	    public $watchDate;
	}
	
	/** ApiSeasonRating **/
	class ApiSeasonRating { 
	    /**
	    * @var ApiEpisodeRatingInfo[]
	    */
	    public $episodes;
	    /**
	    * @var int
	    */
	    public $episodesCount;
	    /**
	    * @var float
	    */
	    public $rating;
	    /**
	    * @var int
	    */
	    public $seasonNumber;
	    /**
	    * @var int
	    */
	    public $votes;
	}
	
	/** ApiSeasonRatingInfo **/
	class ApiSeasonRatingInfo { 
	    /**
	    * @var float
	    */
	    public $rating;
	    /**
	    * @var int
	    */
	    public $seasonNumber;
	    /**
	    * @var int
	    */
	    public $votes;
	}
	
	/** ApiShow **/
	class ApiShow { 
	    /**
	    * @var string
	    */
	    public $alias;
	    /**
	    * @var string
	    */
	    public $category;
	    /**
	    * @var string
	    */
	    public $country;
	    /**
	    * @var string
	    */
	    public $countryTitle;
	    /**
	    * @var string
	    */
	    public $description;
	    /**
	    * @var string
	    */
	    public $ended;
	    /**
	    * @var ApiEpisodeSummary[]
	    */
	    public $episodes;
	    /**
	    * @var array
	    */
	    public $genreIds;
	    /**
	    * @var bool
	    */
	    public $hasBackgroundImage;
	    /**
	    * @var int
	    */
	    public $id;
	    /**
	    * @var string
	    */
	    public $image;
	    /**
	    * @var array
	    */
	    public $images;
	    /**
	    * @var int
	    */
	    public $imdbId;
	    /**
	    * @var float
	    */
	    public $imdbRating;
	    /**
	    * @var string
	    */
	    public $imdbUrl;
	    /**
	    * @var int
	    */
	    public $imdbVoted;
	    /**
	    * @var int
	    */
	    public $kinopoiskId;
	    /**
	    * @var float
	    */
	    public $kinopoiskRating;
	    /**
	    * @var string
	    */
	    public $kinopoiskUrl;
	    /**
	    * @var int
	    */
	    public $kinopoiskVoted;
	    /**
	    * @var ApiNetwork
	    */
	    public $network;
	    /**
	    * @var ApiOnlineLink
	    */
	    public $onlineLinkExclusive;
	    /**
	    * @var ApiOnlineLink[]
	    */
	    public $onlineLinks;
	    /**
	    * @var float
	    */
	    public $rating;
	    /**
	    * @var int
	    */
	    public $runtime;
	    /**
	    * @var string
	    */
	    public $runtimeTotal;
	    /**
	    * @var string
	    */
	    public $started;
	    /**
	    * @var string
	    */
	    public $status;
	    /**
	    * @var string
	    */
	    public $title;
	    /**
	    * @var string
	    */
	    public $titleOriginal;
	    /**
	    * @var int
	    */
	    public $totalSeasons;
	    /**
	    * @var int
	    */
	    public $tvrageId;
	    /**
	    * @var int
	    */
	    public $voted;
	    /**
	    * @var int
	    */
	    public $watching;
	    /**
	    * @var int
	    */
	    public $watchingTotal;
	    /**
	    * @var int
	    */
	    public $year;
	}
	
	/** ApiShowCatalog **/
	class ApiShowCatalog { 
	    /**
	    * @var float
	    */
	    public $audience;
	    /**
	    * @var bool
	    */
	    public $hasEmbed;
	    /**
	    * @var string
	    */
	    public $provider;
	    /**
	    * @var ApiShowSummary
	    */
	    public $show;
	    /**
	    * @var string
	    */
	    public $status;
	}
	
	/** ApiShowFilter **/
	class ApiShowFilter { 
	    /**
	    * @var string
	    */
	    public $alias;
	    /**
	    * @var string
	    */
	    public $title;
	    /**
	    * @var ApiShowFilterValue[]
	    */
	    public $values;
	}
	
	/** ApiShowFilterValue **/
	class ApiShowFilterValue { 
	    /**
	    * @var string
	    */
	    public $alias;
	    /**
	    * @var int
	    */
	    public $count;
	    /**
	    * @var bool
	    */
	    public $isActive;
	    /**
	    * @var string
	    */
	    public $title;
	}
	
	/** ApiShowRank **/
	class ApiShowRank { 
	    /**
	    * @var int
	    */
	    public $rank;
	    /**
	    * @var ApiShowSummary
	    */
	    public $show;
	    /**
	    * @var int
	    */
	    public $voted;
	}
	
	/** ApiShowRating **/
	class ApiShowRating { 
	    /**
	    * @var ApiSeasonRating[]
	    */
	    public $seasons;
	    /**
	    * @var float
	    */
	    public $totalRating;
	    /**
	    * @var int
	    */
	    public $totalVotes;
	}
	
	/** ApiShowRecommendation **/
	class ApiShowRecommendation { 
	    /**
	    * @var int
	    */
	    public $friendsWatching;
	    /**
	    * @var int
	    */
	    public $percent;
	    /**
	    * @var ApiShowSummary
	    */
	    public $show;
	}
	
	/** ApiShowSearch **/
	class ApiShowSearch { 
	    /**
	    * @var string
	    */
	    public $category;
	    /**
	    * @var string
	    */
	    public $country;
	    /**
	    * @var bool
	    */
	    public $embed;
	    /**
	    * @var int
	    */
	    public $genre;
	    /**
	    * @var int
	    */
	    public $network;
	    /**
	    * @var array
	    */
	    public $providers;
	    /**
	    * @var string
	    */
	    public $query;
	    /**
	    * @var string
	    */
	    public $sort;
	    /**
	    * @var string
	    */
	    public $status;
	    /**
	    * @var int
	    */
	    public $watching;
	    /**
	    * @var int
	    */
	    public $year;
	}
	
	/** ApiShowSummary **/
	class ApiShowSummary { 
	    /**
	    * @var string
	    */
	    public $category;
	    /**
	    * @var string
	    */
	    public $description;
	    /**
	    * @var int
	    */
	    public $id;
	    /**
	    * @var string
	    */
	    public $image;
	    /**
	    * @var array
	    */
	    public $images;
	    /**
	    * @var int
	    */
	    public $onlineCount;
	    /**
	    * @var string
	    */
	    public $promoUrl;
	    /**
	    * @var float
	    */
	    public $rating;
	    /**
	    * @var string
	    */
	    public $status;
	    /**
	    * @var string
	    */
	    public $title;
	    /**
	    * @var string
	    */
	    public $titleOriginal;
	    /**
	    * @var int
	    */
	    public $totalSeasons;
	    /**
	    * @var int
	    */
	    public $voted;
	    /**
	    * @var int
	    */
	    public $watching;
	    /**
	    * @var int
	    */
	    public $year;
	}
	
	/** ApiShowWatchStatus **/
	class ApiShowWatchStatus { 
	    /**
	    * @var ApiShowSummary
	    */
	    public $show;
	    /**
	    * @var string
	    */
	    public $watchStatus;
	}
	
	/** ApiShowsRatings **/
	class ApiShowsRatings { 
	    /**
	    * @var string
	    */
	    public $mode;
	    /**
	    * @var int
	    */
	    public $totalUsersFriends;
	    /**
	    * @var ApiShowWatchStatus[]
	    */
	    public $userShows;
	}
	
	/** ApiSiteCounters **/
	class ApiSiteCounters { 
	    /**
	    * @var int
	    */
	    public $users;
	    /**
	    * @var int
	    */
	    public $wasted;
	    /**
	    * @var int
	    */
	    public $wastedAvg;
	    /**
	    * @var string
	    */
	    public $wastedAvgStr;
	    /**
	    * @var string
	    */
	    public $wastedStr;
	}
	
	/** ApiSocial **/
	class ApiSocial { 
	    /**
	    * @var string
	    */
	    public $avatarUrl;
	    /**
	    * @var bool
	    */
	    public $isLinked;
	    /**
	    * @var string
	    */
	    public $profileUrl;
	    /**
	    * @var string
	    */
	    public $provider;
	    /**
	    * @var string
	    */
	    public $username;
	}
	
	/** ApiSourceFilter **/
	class ApiSourceFilter { 
	    /**
	    * @var int
	    */
	    public $count;
	    /**
	    * @var string
	    */
	    public $source;
	}
	
	/** ApiStaticPage **/
	class ApiStaticPage { 
	    /**
	    * @var string
	    */
	    public $content;
	    /**
	    * @var string
	    */
	    public $pageTitle;
	    /**
	    * @var string
	    */
	    public $title;
	}
	
	/** ApiToken **/
	class ApiToken { 
	    /**
	    * @var string
	    */
	    public $access_token;
	    /**
	    * @var int
	    */
	    public $expires_in;
	    /**
	    * @var string
	    */
	    public $refresh_token;
	    /**
	    * @var string
	    */
	    public $scope;
	    /**
	    * @var string
	    */
	    public $token_type;
	}
	
	/** ApiTrends **/
	class ApiTrends { 
	    /**
	    * @var array
	    */
	    public $chart;
	    /**
	    * @var ApiShowWatchStatus[]
	    */
	    public $shows;
	}
	
	/** ApiUser **/
	class ApiUser { 
	    /**
	    * @var string
	    */
	    public $avatar;
	    /**
	    * @var string
	    */
	    public $gender;
	    /**
	    * @var bool
	    */
	    public $isDeleted;
	    /**
	    * @var bool
	    */
	    public $isPro;
	    /**
	    * @var string
	    */
	    public $login;
	    /**
	    * @var int
	    */
	    public $wastedTime;
	}
	
	/** ApiUserAchievementsCount **/
	class ApiUserAchievementsCount { 
	    /**
	    * @var int
	    */
	    public $achievementsCount;
	    /**
	    * @var ApiUser
	    */
	    public $user;
	}
	
	/** ApiUserAvatarSetting **/
	class ApiUserAvatarSetting { 
	    /**
	    * @var ApiAvatarValue[]
	    */
	    public $options;
	    /**
	    * @var string
	    */
	    public $title;
	    /**
	    * @var string
	    */
	    public $value;
	}
	
	/** ApiUserAwardShow **/
	class ApiUserAwardShow { 
	    /**
	    * @var bool
	    */
	    public $isShowUserVotedFor;
	    /**
	    * @var ApiShowSummary
	    */
	    public $show;
	    /**
	    * @var string
	    */
	    public $userWatchStatus;
	    /**
	    * @var int
	    */
	    public $votes;
	    /**
	    * @var float
	    */
	    public $votesPercent;
	}
	
	/** ApiUserComment **/
	class ApiUserComment { 
	    /**
	    * @var string
	    */
	    public $comment;
	    /**
	    * @var string
	    */
	    public $createdAt;
	    /**
	    * @var string
	    */
	    public $editableTill;
	    /**
	    * @var ApiEpisodeSummary
	    */
	    public $episode;
	    /**
	    * @var int
	    */
	    public $episodeId;
	    /**
	    * @var int
	    */
	    public $id;
	    /**
	    * @var string
	    */
	    public $image;
	    /**
	    * @var bool
	    */
	    public $isBad;
	    /**
	    * @var bool
	    */
	    public $isDeleted;
	    /**
	    * @var bool
	    */
	    public $isEditable;
	    /**
	    * @var bool
	    */
	    public $isMyComment;
	    /**
	    * @var bool
	    */
	    public $isMyMinus;
	    /**
	    * @var bool
	    */
	    public $isMyPlus;
	    /**
	    * @var bool
	    */
	    public $isNew;
	    /**
	    * @var string
	    */
	    public $language;
	    /**
	    * @var ApiUserComment
	    */
	    public $parent;
	    /**
	    * @var int
	    */
	    public $parentId;
	    /**
	    * @var int
	    */
	    public $rating;
	    /**
	    * @var ApiShowSummary
	    */
	    public $show;
	    /**
	    * @var int
	    */
	    public $showId;
	    /**
	    * @var int
	    */
	    public $statusId;
	    /**
	    * @var ApiUser
	    */
	    public $user;
	}
	
	/** ApiUserCommentsResponse **/
	class ApiUserCommentsResponse { 
	    /**
	    * @var ApiUserComment[]
	    */
	    public $comments;
	    /**
	    * @var int
	    */
	    public $count;
	    /**
	    * @var bool
	    */
	    public $hasSpoilers;
	    /**
	    * @var bool
	    */
	    public $isTracking;
	    /**
	    * @var int
	    */
	    public $newCount;
	}
	
	/** ApiUserDailyWaste **/
	class ApiUserDailyWaste { 
	    /**
	    * @var string
	    */
	    public $day;
	    /**
	    * @var int
	    */
	    public $episodesCount;
	    /**
	    * @var int
	    */
	    public $wasted;
	}
	
	/** ApiUserEpisode **/
	class ApiUserEpisode { 
	    /**
	    * @var int
	    */
	    public $id;
	    /**
	    * @var bool
	    */
	    public $isFavorite;
	    /**
	    * @var bool
	    */
	    public $isIgnored;
	    /**
	    * @var bool
	    */
	    public $isMoveAble;
	    /**
	    * @var ApiNoteSummary
	    */
	    public $note;
	    /**
	    * @var int
	    */
	    public $rating;
	    /**
	    * @var string
	    */
	    public $watchDate;
	}
	
	/** ApiUserEpisodeSummary **/
	class ApiUserEpisodeSummary { 
	    /**
	    * @var int
	    */
	    public $id;
	    /**
	    * @var bool
	    */
	    public $isMoveAble;
	    /**
	    * @var int
	    */
	    public $rating;
	    /**
	    * @var string
	    */
	    public $watchDate;
	}
	
	/** ApiUserProfile **/
	class ApiUserProfile { 
	    /**
	    * @var int
	    */
	    public $commentsCount;
	    /**
	    * @var int
	    */
	    public $commentsRating;
	    /**
	    * @var int
	    */
	    public $id;
	    /**
	    * @var string
	    */
	    public $proPayedTill;
	    /**
	    * @var ApiUserRanks
	    */
	    public $ranks;
	    /**
	    * @var ApiUserSocial
	    */
	    public $social;
	    /**
	    * @var ApiUserStats
	    */
	    public $stats;
	    /**
	    * @var ApiUser
	    */
	    public $user;
	}
	
	/** ApiUserProfileSetting **/
	class ApiUserProfileSetting { 
	    /**
	    * @var string
	    */
	    public $alias;
	    /**
	    * @var bool
	    */
	    public $isPro;
	    /**
	    * @var bool
	    */
	    public $isRequired;
	    /**
	    * @var ApiValue[]
	    */
	    public $options;
	    /**
	    * @var string
	    */
	    public $title;
	    /**
	    * @var string
	    */
	    public $value;
	}
	
	/** ApiUserProfileSettingRequest **/
	class ApiUserProfileSettingRequest { 
	    /**
	    * @var string
	    */
	    public $alias;
	    /**
	    * @var string
	    */
	    public $value;
	}
	
	/** ApiUserRanks **/
	class ApiUserRanks { 
	    /**
	    * @var int
	    */
	    public $fiendsPos;
	    /**
	    * @var int
	    */
	    public $fiendsTotal;
	}
	
	/** ApiUserRatedEpisode **/
	class ApiUserRatedEpisode { 
	    /**
	    * @var ApiUserEpisodeSummary
	    */
	    public $episode;
	    /**
	    * @var ApiUser
	    */
	    public $user;
	}
	
	/** ApiUserRatedShow **/
	class ApiUserRatedShow { 
	    /**
	    * @var ApiUserShow
	    */
	    public $show;
	    /**
	    * @var ApiUser
	    */
	    public $user;
	}
	
	/** ApiUserRating **/
	class ApiUserRating { 
	    /**
	    * @var float
	    */
	    public $rating;
	    /**
	    * @var ApiUser
	    */
	    public $user;
	}
	
	/** ApiUserSearch **/
	class ApiUserSearch { 
	    /**
	    * @var string
	    */
	    public $gender;
	    /**
	    * @var string
	    */
	    public $query;
	    /**
	    * @var int
	    */
	    public $wasted;
	    /**
	    * @var int
	    */
	    public $year;
	}
	
	/** ApiUserShow **/
	class ApiUserShow { 
	    /**
	    * @var int
	    */
	    public $id;
	    /**
	    * @var bool
	    */
	    public $isFavorite;
	    /**
	    * @var ApiNoteSummary
	    */
	    public $note;
	    /**
	    * @var int
	    */
	    public $rating;
	    /**
	    * @var int
	    */
	    public $watchCount;
	    /**
	    * @var string
	    */
	    public $watchStatus;
	}
	
	/** ApiUserShowStatus **/
	class ApiUserShowStatus { 
	    /**
	    * @var int
	    */
	    public $showId;
	    /**
	    * @var string
	    */
	    public $watchStatus;
	}
	
	/** ApiUserShowSummary **/
	class ApiUserShowSummary { 
	    /**
	    * @var int
	    */
	    public $rating;
	    /**
	    * @var int
	    */
	    public $runtime;
	    /**
	    * @var ApiShowSummary
	    */
	    public $show;
	    /**
	    * @var int
	    */
	    public $totalEpisodes;
	    /**
	    * @var float
	    */
	    public $totalHours;
	    /**
	    * @var int
	    */
	    public $watchCount;
	    /**
	    * @var string
	    */
	    public $watchStatus;
	    /**
	    * @var int
	    */
	    public $watchedEpisodes;
	    /**
	    * @var float
	    */
	    public $watchedHours;
	}
	
	/** ApiUserSocial **/
	class ApiUserSocial { 
	    /**
	    * @var string
	    */
	    public $twitter;
	    /**
	    * @var string
	    */
	    public $vkontakte;
	}
	
	/** ApiUserStats **/
	class ApiUserStats { 
	    /**
	    * @var float
	    */
	    public $remainingDays;
	    /**
	    * @var int
	    */
	    public $remainingEpisodes;
	    /**
	    * @var float
	    */
	    public $remainingHours;
	    /**
	    * @var float
	    */
	    public $totalDays;
	    /**
	    * @var int
	    */
	    public $totalEpisodes;
	    /**
	    * @var float
	    */
	    public $totalHours;
	    /**
	    * @var float
	    */
	    public $watchedDays;
	    /**
	    * @var int
	    */
	    public $watchedEpisodes;
	    /**
	    * @var float
	    */
	    public $watchedHours;
	    /**
	    * @var bool
	    */
	    public $withRewatches;
	}
	
	/** ApiValue **/
	class ApiValue { 
	    /**
	    * @var string
	    */
	    public $title;
	    /**
	    * @var string
	    */
	    public $value;
	}
	


    /**
     * RpcClient
     */
 	class RpcClient extends BaseJsonRpcClient {
		
		/**
		* <auth.LinkSocialProfile> RPC method
		* Link Social Profile.
		* @param string $provider
		* @param string $returnUrl
		* @param bool $isNotification [optional] set to true if call is notification
		* @return string
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function auth_LinkSocialProfile( string $provider, string $returnUrl, $isNotification = false ): string {
			return $this->call( __FUNCTION__, 'string', [ 'provider' => $provider, 'returnUrl' => $returnUrl, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <auth.LoginByAppleID> RPC method
		* Login By AppleID.
		* @param string $clientId
		* @param string $sig
		* @param string $identityToken
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiToken|null
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function auth_LoginByAppleID( string $clientId, string $sig, string $identityToken, $isNotification = false ): ?ApiToken {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiToken', [ 'clientId' => $clientId, 'sig' => $sig, 'identityToken' => $identityToken, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <auth.Register> RPC method
		* Register new user.
		* @param string $clientId
		* @param string $sig
		* @param string $login
		* @param string $email
		* @param string $password
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiToken|null
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function auth_Register( string $clientId, string $sig, string $login, string $email, string $password, $isNotification = false ): ?ApiToken {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiToken', [ 'clientId' => $clientId, 'sig' => $sig, 'login' => $login, 'email' => $email, 'password' => $password, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <auth.UnlinkSocialProfile> RPC method
		* Unlink Social Profile.
		* @param string $provider
		* @param bool $isNotification [optional] set to true if call is notification
		* @return bool
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function auth_UnlinkSocialProfile( string $provider, $isNotification = false ): bool {
			return $this->call( __FUNCTION__, 'bool', [ 'provider' => $provider, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <iap.ValidateReceiptAndroid> RPC method
		* Validate Android Receipt.
		* @param string $payload
		* @param bool $isNotification [optional] set to true if call is notification
		* @return bool
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function iap_ValidateReceiptAndroid( string $payload, $isNotification = false ): bool {
			return $this->call( __FUNCTION__, 'bool', [ 'payload' => $payload, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <iap.ValidateReceiptIOS> RPC method
		* Validate iOS Receipt.
		* @param string $receiptData
		* @param string $transactionId
		* @param bool|null $isSandbox [optional]
		* @param bool $isNotification [optional] set to true if call is notification
		* @return bool
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function iap_ValidateReceiptIOS( string $receiptData, string $transactionId, ?bool $isSandbox, $isNotification = false ): bool {
			return $this->call( __FUNCTION__, 'bool', [ 'receiptData' => $receiptData, 'transactionId' => $transactionId, 'isSandbox' => $isSandbox, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <lists.AddEpisode> RPC method
		* Add Episode To List.
		* @param int $id
		* @param string $list
		* @param bool $isNotification [optional] set to true if call is notification
		* @return bool
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function lists_AddEpisode( int $id, string $list, $isNotification = false ): bool {
			return $this->call( __FUNCTION__, 'bool', [ 'id' => $id, 'list' => $list, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <lists.AddShow> RPC method
		* Add Show To List.
		* @param int $id
		* @param string $list
		* @param bool $isNotification [optional] set to true if call is notification
		* @return bool
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function lists_AddShow( int $id, string $list, $isNotification = false ): bool {
			return $this->call( __FUNCTION__, 'bool', [ 'id' => $id, 'list' => $list, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <lists.Episodes> RPC method
		* Get User Episodes List.
		* @param string $list
		* @param int|null $showId [optional]
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiEpisodeListItem[]
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function lists_Episodes( string $list, ?int $showId, $isNotification = false ): array {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiEpisodeListItem[]', [ 'list' => $list, 'showId' => $showId, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <lists.RemoveEpisode> RPC method
		* Remove Episode From List.
		* @param int $id
		* @param string $list
		* @param bool $isNotification [optional] set to true if call is notification
		* @return bool
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function lists_RemoveEpisode( int $id, string $list, $isNotification = false ): bool {
			return $this->call( __FUNCTION__, 'bool', [ 'id' => $id, 'list' => $list, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <lists.RemoveShow> RPC method
		* Remove Show From List.
		* @param int $id
		* @param string $list
		* @param bool $isNotification [optional] set to true if call is notification
		* @return bool
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function lists_RemoveShow( int $id, string $list, $isNotification = false ): bool {
			return $this->call( __FUNCTION__, 'bool', [ 'id' => $id, 'list' => $list, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <lists.Shows> RPC method
		* Get User Shows List.
		* @param string $list
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiShowSummary[]
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function lists_Shows( string $list, $isNotification = false ): array {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiShowSummary[]', [ 'list' => $list, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <manage.CheckEpisode> RPC method
		* Check Episode.
		* @param int $id
		* @param int|null $rating [optional]
		* @param bool $isNotification [optional] set to true if call is notification
		* @return bool
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function manage_CheckEpisode( int $id, ?int $rating, $isNotification = false ): bool {
			return $this->call( __FUNCTION__, 'bool', [ 'id' => $id, 'rating' => $rating, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <manage.MoveEpisodeDate> RPC method
		* Move Episode Date.
		* @param int $episodeId
		* @param int $shiftDays
		* @param bool $isNotification [optional] set to true if call is notification
		* @return bool
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function manage_MoveEpisodeDate( int $episodeId, int $shiftDays, $isNotification = false ): bool {
			return $this->call( __FUNCTION__, 'bool', [ 'episodeId' => $episodeId, 'shiftDays' => $shiftDays, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <manage.RateEpisode> RPC method
		* Rate Episode.
		* @param int $id
		* @param int $rating
		* @param bool $isNotification [optional] set to true if call is notification
		* @return bool
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function manage_RateEpisode( int $id, int $rating, $isNotification = false ): bool {
			return $this->call( __FUNCTION__, 'bool', [ 'id' => $id, 'rating' => $rating, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <manage.RateEpisodesBulk> RPC method
		* Rate Episodes Bulk.
		* @param array $r1
		* @param array $r2
		* @param array $r3
		* @param array $r4
		* @param array $r5
		* @param bool $isNotification [optional] set to true if call is notification
		* @return bool
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function manage_RateEpisodesBulk( array $r1, array $r2, array $r3, array $r4, array $r5, $isNotification = false ): bool {
			return $this->call( __FUNCTION__, 'bool', [ 'r1' => $r1, 'r2' => $r2, 'r3' => $r3, 'r4' => $r4, 'r5' => $r5, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <manage.RateShow> RPC method
		* Rate Show.
		* @param int $id
		* @param int $rating
		* @param bool $isNotification [optional] set to true if call is notification
		* @return bool
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function manage_RateShow( int $id, int $rating, $isNotification = false ): bool {
			return $this->call( __FUNCTION__, 'bool', [ 'id' => $id, 'rating' => $rating, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <manage.ReWatchShow> RPC method
		* Update Show Watch Count.
		* @param int $id
		* @param int $count
		* @param bool $isNotification [optional] set to true if call is notification
		* @return bool
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function manage_ReWatchShow( int $id, int $count, $isNotification = false ): bool {
			return $this->call( __FUNCTION__, 'bool', [ 'id' => $id, 'count' => $count, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <manage.SetShowStatus> RPC method
		* Set Show Watching Status.
		* @param int $id
		* @param string $status
		* @param bool $isNotification [optional] set to true if call is notification
		* @return bool
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function manage_SetShowStatus( int $id, string $status, $isNotification = false ): bool {
			return $this->call( __FUNCTION__, 'bool', [ 'id' => $id, 'status' => $status, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <manage.SyncEpisodes> RPC method
		* Sync Episodes.
		* @param int $showId
		* @param array $episodeIds
		* @param bool $isNotification [optional] set to true if call is notification
		* @return bool
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function manage_SyncEpisodes( int $showId, array $episodeIds, $isNotification = false ): bool {
			return $this->call( __FUNCTION__, 'bool', [ 'showId' => $showId, 'episodeIds' => $episodeIds, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <manage.SyncEpisodesDelta> RPC method
		* Sync Episodes Delta.
		* @param int $showId
		* @param array $checkedIds
		* @param array $unCheckedIds
		* @param bool $isNotification [optional] set to true if call is notification
		* @return bool
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function manage_SyncEpisodesDelta( int $showId, array $checkedIds, array $unCheckedIds, $isNotification = false ): bool {
			return $this->call( __FUNCTION__, 'bool', [ 'showId' => $showId, 'checkedIds' => $checkedIds, 'unCheckedIds' => $unCheckedIds, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <manage.UnCheckEpisode> RPC method
		* UnCheck Episode.
		* @param int $id
		* @param bool $isNotification [optional] set to true if call is notification
		* @return bool
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function manage_UnCheckEpisode( int $id, $isNotification = false ): bool {
			return $this->call( __FUNCTION__, 'bool', [ 'id' => $id, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <news.Categories> RPC method
		* Get Categories.
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiNewsCategory[]
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function news_Categories( $isNotification = false ): array {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiNewsCategory[]', [ ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <news.Comments> RPC method
		* Get News Comments for Current User or Guest.
		* @param int $newsId
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiNewsCommentsResponse|null
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function news_Comments( int $newsId, $isNotification = false ): ?ApiNewsCommentsResponse {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiNewsCommentsResponse', [ 'newsId' => $newsId, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <news.Count> RPC method
		* Count News.
		* @param ApiNewsSearch|null $search [optional] ApiNewsSearch
		* @param bool $isNotification [optional] set to true if call is notification
		* @return int
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function news_Count( ?ApiNewsSearch $search, $isNotification = false ): int {
			return $this->call( __FUNCTION__, 'int', [ 'search' => $search, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <news.DeleteComment> RPC method
		* Delete Comment.
		* @param int $commentId
		* @param bool $isNotification [optional] set to true if call is notification
		* @return bool
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function news_DeleteComment( int $commentId, $isNotification = false ): bool {
			return $this->call( __FUNCTION__, 'bool', [ 'commentId' => $commentId, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <news.Get> RPC method
		* Get News.
		* @param ApiNewsSearch|null $search [optional] ApiNewsSearch
		* @param int|null $page [optional]
		* @param int|null $pageSize [optional]
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiNewsSummary[]
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function news_Get( ?ApiNewsSearch $search, ?int $page, ?int $pageSize, $isNotification = false ): array {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiNewsSummary[]', [ 'search' => $search, 'page' => $page, 'pageSize' => $pageSize, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <news.GetById> RPC method
		* Get News Item By Id.
		* @param int $newsId
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiNews|null
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function news_GetById( int $newsId, $isNotification = false ): ?ApiNews {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiNews', [ 'newsId' => $newsId, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <news.PostComment> RPC method
		* Post Comment.
		* @param int $newsId
		* @param string $text
		* @param string|null $image [optional]
		* @param int|null $parentCommentId [optional]
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiNewsComment|null
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function news_PostComment( int $newsId, string $text, ?string $image, ?int $parentCommentId, $isNotification = false ): ?ApiNewsComment {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiNewsComment', [ 'newsId' => $newsId, 'text' => $text, 'image' => $image, 'parentCommentId' => $parentCommentId, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <news.Related> RPC method
		* Get related News.
		* @param int $newsId
		* @param int|null $count [optional]
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiNewsSummary[]
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function news_Related( int $newsId, ?int $count, $isNotification = false ): array {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiNewsSummary[]', [ 'newsId' => $newsId, 'count' => $count, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <news.TrackComments> RPC method
		* Track new comments for this news or not for current user.
		* @param int $newsId
		* @param bool $isTracked
		* @param bool $isNotification [optional] set to true if call is notification
		* @return bool
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function news_TrackComments( int $newsId, bool $isTracked, $isNotification = false ): bool {
			return $this->call( __FUNCTION__, 'bool', [ 'newsId' => $newsId, 'isTracked' => $isTracked, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <news.TranslateComment> RPC method
		* Translate news comment.
		* @param int $commentId
		* @param string|null $language [optional]
		* @param bool $isNotification [optional] set to true if call is notification
		* @return string
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function news_TranslateComment( int $commentId, ?string $language, $isNotification = false ): string {
			return $this->call( __FUNCTION__, 'string', [ 'commentId' => $commentId, 'language' => $language, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <news.UpdateComment> RPC method
		* Update Comment.
		* @param int $commentId
		* @param string $text
		* @param string|null $image [optional]
		* @param bool|null $deleteImage [optional]
		* @param bool $isNotification [optional] set to true if call is notification
		* @return bool
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function news_UpdateComment( int $commentId, string $text, ?string $image, ?bool $deleteImage, $isNotification = false ): bool {
			return $this->call( __FUNCTION__, 'bool', [ 'commentId' => $commentId, 'text' => $text, 'image' => $image, 'deleteImage' => $deleteImage, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <news.ViewComments> RPC method
		* Mark comments as viewed for current user.
		* @param int $newsId
		* @param bool $isNotification [optional] set to true if call is notification
		* @return bool
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function news_ViewComments( int $newsId, $isNotification = false ): bool {
			return $this->call( __FUNCTION__, 'bool', [ 'newsId' => $newsId, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <news.VoteComment> RPC method
		* Vote for news comment.
		* @param int $commentId
		* @param bool $isPositive
		* @param bool $isNotification [optional] set to true if call is notification
		* @return int
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function news_VoteComment( int $commentId, bool $isPositive, $isNotification = false ): int {
			return $this->call( __FUNCTION__, 'int', [ 'commentId' => $commentId, 'isPositive' => $isPositive, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <notes.Count> RPC method
		* Count Notes.
		* @param ApiNoteSearch|null $search [optional] ApiNoteSearch
		* @param bool $isNotification [optional] set to true if call is notification
		* @return int
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function notes_Count( ?ApiNoteSearch $search, $isNotification = false ): int {
			return $this->call( __FUNCTION__, 'int', [ 'search' => $search, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <notes.Delete> RPC method
		* Delete Note.
		* @param int $id
		* @param bool $isNotification [optional] set to true if call is notification
		* @return bool
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function notes_Delete( int $id, $isNotification = false ): bool {
			return $this->call( __FUNCTION__, 'bool', [ 'id' => $id, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <notes.Get> RPC method
		* Get Notes.
		* @param ApiNoteSearch|null $search [optional] ApiNoteSearch
		* @param int|null $page [optional]
		* @param int|null $pageSize [optional]
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiNoteSummary[]
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function notes_Get( ?ApiNoteSearch $search, ?int $page, ?int $pageSize, $isNotification = false ): array {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiNoteSummary[]', [ 'search' => $search, 'page' => $page, 'pageSize' => $pageSize, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <notes.Restore> RPC method
		* Restore Note.
		* @param int $id
		* @param bool $isNotification [optional] set to true if call is notification
		* @return bool
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function notes_Restore( int $id, $isNotification = false ): bool {
			return $this->call( __FUNCTION__, 'bool', [ 'id' => $id, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <notes.Save> RPC method
		* Save Note.
		* @param int $showId
		* @param string $text
		* @param int|null $episodeId [optional]
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiNoteSummary|null
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function notes_Save( int $showId, string $text, ?int $episodeId, $isNotification = false ): ?ApiNoteSummary {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiNoteSummary', [ 'showId' => $showId, 'text' => $text, 'episodeId' => $episodeId, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <profile.Achievement> RPC method
		* Get Achievement.
		* @param string $alias
		* @param string $key
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiAchievement|null
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function profile_Achievement( string $alias, string $key, $isNotification = false ): ?ApiAchievement {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiAchievement', [ 'alias' => $alias, 'key' => $key, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <profile.Achievements> RPC method
		* Get Achievements.
		* @param string|null $login [optional]
		* @param bool|null $withPublic [optional]
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiAchievementSummary[]
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function profile_Achievements( ?string $login, ?bool $withPublic, $isNotification = false ): array {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiAchievementSummary[]', [ 'login' => $login, 'withPublic' => $withPublic, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <profile.ActivatePromocode> RPC method
		* Activate Promocode.
		* @param string $promocode
		* @param bool $isNotification [optional] set to true if call is notification
		* @return string
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function profile_ActivatePromocode( string $promocode, $isNotification = false ): string {
			return $this->call( __FUNCTION__, 'string', [ 'promocode' => $promocode, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <profile.AvatarSettings> RPC method
		* Get avatar settings.
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiUserAvatarSetting|null
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function profile_AvatarSettings( $isNotification = false ): ?ApiUserAvatarSetting {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiUserAvatarSetting', [ ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <profile.BlockUser> RPC method
		* Block User by login.
		* @param string $login
		* @param bool $isNotification [optional] set to true if call is notification
		* @return mixed
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function profile_BlockUser( string $login, $isNotification = false ) {
			return $this->call( __FUNCTION__, 'mixed', [ 'login' => $login, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <profile.BlockedUsersList> RPC method
		* Get list of blocked Users.
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiUser[]
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function profile_BlockedUsersList( $isNotification = false ): array {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiUser[]', [ ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <profile.CanUserChangeLogin> RPC method
		* If User can change login.
		* @param bool $isNotification [optional] set to true if call is notification
		* @return bool
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function profile_CanUserChangeLogin( $isNotification = false ): bool {
			return $this->call( __FUNCTION__, 'bool', [ ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <profile.ChangeEmail> RPC method
		* Change email.
		* @param string $email
		* @param bool $isNotification [optional] set to true if call is notification
		* @return mixed
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function profile_ChangeEmail( string $email, $isNotification = false ) {
			return $this->call( __FUNCTION__, 'mixed', [ 'email' => $email, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <profile.ChangeLogin> RPC method
		* Change login.
		* @param string $login
		* @param bool $isNotification [optional] set to true if call is notification
		* @return mixed
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function profile_ChangeLogin( string $login, $isNotification = false ) {
			return $this->call( __FUNCTION__, 'mixed', [ 'login' => $login, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <profile.ChangePassword> RPC method
		* Change password.
		* @param string $old
		* @param string $firstNew
		* @param string $secondNew
		* @param bool $isNotification [optional] set to true if call is notification
		* @return mixed
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function profile_ChangePassword( string $old, string $firstNew, string $secondNew, $isNotification = false ) {
			return $this->call( __FUNCTION__, 'mixed', [ 'old' => $old, 'firstNew' => $firstNew, 'secondNew' => $secondNew, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <profile.CommentReportReasons> RPC method
		* Get Comment Report reasons.
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiCommentReportReason[]
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function profile_CommentReportReasons( $isNotification = false ): array {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiCommentReportReason[]', [ ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <profile.Counters> RPC method
		* Get Counters.
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiCounters|null
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function profile_Counters( $isNotification = false ): ?ApiCounters {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiCounters', [ ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <profile.CountersWithPreview> RPC method
		* Get Counters with Preview.
		* @param int $sCount
		* @param int $eCount
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiPreview|null
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function profile_CountersWithPreview( int $sCount, int $eCount, $isNotification = false ): ?ApiPreview {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiPreview', [ 'sCount' => $sCount, 'eCount' => $eCount, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <profile.DailyDistribution> RPC method
		* Get User Daily Distribution (like GitHub).
		* @param string|null $login [optional]
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiUserDailyWaste[]
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function profile_DailyDistribution( ?string $login, $isNotification = false ): array {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiUserDailyWaste[]', [ 'login' => $login, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <profile.DailyEpisodeList> RPC method
		* Get User Daily Episode List.
		* @param string|null $login [optional]
		* @param string $day
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiEpisodeSummary[]
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function profile_DailyEpisodeList( ?string $login, string $day, $isNotification = false ): array {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiEpisodeSummary[]', [ 'login' => $login, 'day' => $day, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <profile.DeleteProfile> RPC method
		* Delete profile.
		* @param string $password
		* @param bool $isNotification [optional] set to true if call is notification
		* @return mixed
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function profile_DeleteProfile( string $password, $isNotification = false ) {
			return $this->call( __FUNCTION__, 'mixed', [ 'password' => $password, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <profile.Episode> RPC method
		* Get User Episode.
		* @param int $episodeId
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiUserEpisode|null
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function profile_Episode( int $episodeId, $isNotification = false ): ?ApiUserEpisode {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiUserEpisode', [ 'episodeId' => $episodeId, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <profile.EpisodeComments> RPC method
		* Get episodes comments.
		* @param string|null $login [optional]
		* @param int|null $page [optional]
		* @param int|null $pageSize [optional]
		* @param string|null $sort [optional]
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiUserComment[]
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function profile_EpisodeComments( ?string $login, ?int $page, ?int $pageSize, ?string $sort, $isNotification = false ): array {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiUserComment[]', [ 'login' => $login, 'page' => $page, 'pageSize' => $pageSize, 'sort' => $sort, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <profile.EpisodeCommentsCount> RPC method
		* Get episodes comments count.
		* @param string|null $login [optional]
		* @param bool $isNotification [optional] set to true if call is notification
		* @return int
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function profile_EpisodeCommentsCount( ?string $login, $isNotification = false ): int {
			return $this->call( __FUNCTION__, 'int', [ 'login' => $login, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <profile.Episodes> RPC method
		* Get User Episodes.
		* @param int $showId
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiUserEpisodeSummary[]
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function profile_Episodes( int $showId, $isNotification = false ): array {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiUserEpisodeSummary[]', [ 'showId' => $showId, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <profile.Feed> RPC method
		* Get User public Feed by login.
		* @param string|null $login [optional]
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiFeed[]
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function profile_Feed( ?string $login, $isNotification = false ): array {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiFeed[]', [ 'login' => $login, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <profile.Followers> RPC method
		* Get Followers for user by login.
		* @param string|null $login [optional]
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiUser[]
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function profile_Followers( ?string $login, $isNotification = false ): array {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiUser[]', [ 'login' => $login, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <profile.Friends> RPC method
		* Get Friends for user by login.
		* @param string|null $login [optional]
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiUser[]
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function profile_Friends( ?string $login, $isNotification = false ): array {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiUser[]', [ 'login' => $login, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <profile.FriendsFeed> RPC method
		* Get User Friends Feed.
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiFeed[]
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function profile_FriendsFeed( $isNotification = false ): array {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiFeed[]', [ ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <profile.Friendship> RPC method
		* Get User Profile.
		* @param string $login
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiFriendship|null
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function profile_Friendship( string $login, $isNotification = false ): ?ApiFriendship {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiFriendship', [ 'login' => $login, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <profile.GenreDistribution> RPC method
		* Get Genre distribution.
		* @param string|null $login [optional]
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiGenreDistribution[]
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function profile_GenreDistribution( ?string $login, $isNotification = false ): array {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiGenreDistribution[]', [ 'login' => $login, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <profile.Get> RPC method
		* Get User Profile.
		* @param string|null $login [optional]
		* @param bool|null $useWatchCount [optional]
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiUserProfile|null
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function profile_Get( ?string $login, ?bool $useWatchCount, $isNotification = false ): ?ApiUserProfile {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiUserProfile', [ 'login' => $login, 'useWatchCount' => $useWatchCount, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <profile.MarkCommentsAsViewed> RPC method
		* Mark Comments As Viewed (episodes and news).
		* @param bool $isNotification [optional] set to true if call is notification
		* @return bool
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function profile_MarkCommentsAsViewed( $isNotification = false ): bool {
			return $this->call( __FUNCTION__, 'bool', [ ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <profile.MostHonouredFriends> RPC method
		* Get top 6 friends who have the highest number of achievements.
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiUserAchievementsCount[]
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function profile_MostHonouredFriends( $isNotification = false ): array {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiUserAchievementsCount[]', [ ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <profile.MutualFriendLogins> RPC method
		* Get mutual Friend logins for user by login.
		* @param string|null $login [optional]
		* @param bool $isNotification [optional] set to true if call is notification
		* @return array
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function profile_MutualFriendLogins( ?string $login, $isNotification = false ): array {
			return $this->call( __FUNCTION__, 'array', [ 'login' => $login, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <profile.MyShowsFiltered> RPC method
		* Get User Episodes filtered by search.
		* @param ApiValue[] $filters
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiFilteredEpisodes
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function profile_MyShowsFiltered( array $filters, $isNotification = false ): ApiFilteredEpisodes {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiFilteredEpisodes', [ 'filters' => $filters, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <profile.NewCommentReplies> RPC method
		* Get Episodes With New Comments Replies.
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiNewComment[]
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function profile_NewCommentReplies( $isNotification = false ): array {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiNewComment[]', [ ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <profile.NewComments> RPC method
		* Get Episodes With New Comments.
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiNewComment[]
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function profile_NewComments( $isNotification = false ): array {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiNewComment[]', [ ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <profile.NewNewsCommentReplies> RPC method
		* Get News With New Comments Replies.
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiNewNewsComment[]
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function profile_NewNewsCommentReplies( $isNotification = false ): array {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiNewNewsComment[]', [ ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <profile.NewNewsComments> RPC method
		* Get News With New Comments.
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiNewNewsComment[]
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function profile_NewNewsComments( $isNotification = false ): array {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiNewNewsComment[]', [ ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <profile.NewsComments> RPC method
		* Get news comments.
		* @param string|null $login [optional]
		* @param int|null $page [optional]
		* @param int|null $pageSize [optional]
		* @param string|null $sort [optional]
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiNewsComment[]
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function profile_NewsComments( ?string $login, ?int $page, ?int $pageSize, ?string $sort, $isNotification = false ): array {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiNewsComment[]', [ 'login' => $login, 'page' => $page, 'pageSize' => $pageSize, 'sort' => $sort, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <profile.NewsCommentsCount> RPC method
		* Get news comments count.
		* @param string|null $login [optional]
		* @param bool $isNotification [optional] set to true if call is notification
		* @return int
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function profile_NewsCommentsCount( ?string $login, $isNotification = false ): int {
			return $this->call( __FUNCTION__, 'int', [ 'login' => $login, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <profile.PostUserEchoTopic> RPC method
		* Post new topic on UserEcho.
		* @param string $header
		* @param string $description
		* @param string $topicType
		* @param string $platform
		* @param bool|null $isPublic [optional]
		* @param bool $isNotification [optional] set to true if call is notification
		* @return mixed
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function profile_PostUserEchoTopic( string $header, string $description, string $topicType, string $platform, ?bool $isPublic, $isNotification = false ) {
			return $this->call( __FUNCTION__, 'mixed', [ 'header' => $header, 'description' => $description, 'topicType' => $topicType, 'platform' => $platform, 'isPublic' => $isPublic, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <profile.RemindPassword> RPC method
		* Remind password.
		* @param string $email
		* @param bool $isNotification [optional] set to true if call is notification
		* @return mixed
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function profile_RemindPassword( string $email, $isNotification = false ) {
			return $this->call( __FUNCTION__, 'mixed', [ 'email' => $email, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <profile.ReportEpisodeComment> RPC method
		* Report Episode Comment for one of the following reasons:
		* "insulting", "obscene", "off-topic", "copy-pasting", "advertising"
		* @param int $commentId
		* @param array $reasons
		* @param bool $isNotification [optional] set to true if call is notification
		* @return bool
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function profile_ReportEpisodeComment( int $commentId, array $reasons, $isNotification = false ): bool {
			return $this->call( __FUNCTION__, 'bool', [ 'commentId' => $commentId, 'reasons' => $reasons, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <profile.ReportNewsComment> RPC method
		* Report News Comment for one of the following reasons:
		* "insulting", "obscene", "off-topic", "copy-pasting", "advertising"
		* @param int $commentId
		* @param array $reasons
		* @param bool $isNotification [optional] set to true if call is notification
		* @return bool
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function profile_ReportNewsComment( int $commentId, array $reasons, $isNotification = false ): bool {
			return $this->call( __FUNCTION__, 'bool', [ 'commentId' => $commentId, 'reasons' => $reasons, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <profile.SaveSettings> RPC method
		* Save Settings.
		* @param ApiUserProfileSettingRequest[] $settings
		* @param bool $isNotification [optional] set to true if call is notification
		* @return bool
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function profile_SaveSettings( array $settings, $isNotification = false ): bool {
			return $this->call( __FUNCTION__, 'bool', [ 'settings' => $settings, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <profile.SetBackground> RPC method
		* Set Background.
		* @param int $showId
		* @param bool $isNotification [optional] set to true if call is notification
		* @return mixed
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function profile_SetBackground( int $showId, $isNotification = false ) {
			return $this->call( __FUNCTION__, 'mixed', [ 'showId' => $showId, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <profile.Settings> RPC method
		* Get Settings.
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiUserProfileSetting[]
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function profile_Settings( $isNotification = false ): array {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiUserProfileSetting[]', [ ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <profile.Show> RPC method
		* Get User Show.
		* @param int|null $showId [optional]
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiUserShow|null
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function profile_Show( ?int $showId, $isNotification = false ): ?ApiUserShow {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiUserShow', [ 'showId' => $showId, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <profile.ShowStatuses> RPC method
		* Get User Show Statuses.
		* @param array|null $showIds [optional]
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiUserShowStatus[]
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function profile_ShowStatuses( ?array $showIds, $isNotification = false ): array {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiUserShowStatus[]', [ 'showIds' => $showIds, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <profile.Shows> RPC method
		* Get User Shows.
		* @param string|null $login [optional]
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiUserShowSummary[]
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function profile_Shows( ?string $login, $isNotification = false ): array {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiUserShowSummary[]', [ 'login' => $login, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <profile.Socials> RPC method
		* Get Socials of User from context.
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiSocial[]
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function profile_Socials( $isNotification = false ): array {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiSocial[]', [ ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <profile.UnblockUser> RPC method
		* Unblock User by login.
		* @param string $login
		* @param bool $isNotification [optional] set to true if call is notification
		* @return mixed
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function profile_UnblockUser( string $login, $isNotification = false ) {
			return $this->call( __FUNCTION__, 'mixed', [ 'login' => $login, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <profile.UpdateAvatarFromFile> RPC method
		* Update avatar from file.
		* @param string $hash
		* @param bool $isNotification [optional] set to true if call is notification
		* @return mixed
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function profile_UpdateAvatarFromFile( string $hash, $isNotification = false ) {
			return $this->call( __FUNCTION__, 'mixed', [ 'hash' => $hash, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <profile.UpdateLastAchievementId> RPC method
		* Mark Achievements as viewed.
		* @param bool $isNotification [optional] set to true if call is notification
		* @return int
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function profile_UpdateLastAchievementId( $isNotification = false ): int {
			return $this->call( __FUNCTION__, 'int', [ ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <profile.UpdateSocialAvatar> RPC method
		* Update social avatar.
		* @param string $mode
		* @param bool $isNotification [optional] set to true if call is notification
		* @return mixed
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function profile_UpdateSocialAvatar( string $mode, $isNotification = false ) {
			return $this->call( __FUNCTION__, 'mixed', [ 'mode' => $mode, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <profile.UpdateUserEchoProfile> RPC method
		* Update email, name and language at UserEcho profile.
		* @param bool $isNotification [optional] set to true if call is notification
		* @return mixed
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function profile_UpdateUserEchoProfile( $isNotification = false ) {
			return $this->call( __FUNCTION__, 'mixed', [ ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <push.RegisterTokenAndroid> RPC method
		* Register Android Token.
		* @param string $token
		* @param string|null $gaid [optional]
		* @param bool $isNotification [optional] set to true if call is notification
		* @return bool
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function push_RegisterTokenAndroid( string $token, ?string $gaid, $isNotification = false ): bool {
			return $this->call( __FUNCTION__, 'bool', [ 'token' => $token, 'gaid' => $gaid, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <push.RegisterTokenIOS> RPC method
		* Register iOS Token.
		* @param string $token
		* @param string|null $idfa [optional]
		* @param bool $isNotification [optional] set to true if call is notification
		* @return bool
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function push_RegisterTokenIOS( string $token, ?string $idfa, $isNotification = false ): bool {
			return $this->call( __FUNCTION__, 'bool', [ 'token' => $token, 'idfa' => $idfa, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <push.RegisterTokenWeb> RPC method
		* Register Web Token.
		* @param string $token
		* @param bool $isNotification [optional] set to true if call is notification
		* @return bool
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function push_RegisterTokenWeb( string $token, $isNotification = false ): bool {
			return $this->call( __FUNCTION__, 'bool', [ 'token' => $token, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <push.SendTestAndroid> RPC method
		* Send Test Push For Android.
		* @param string $pushType
		* @param bool $isNotification [optional] set to true if call is notification
		* @return bool
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function push_SendTestAndroid( string $pushType, $isNotification = false ): bool {
			return $this->call( __FUNCTION__, 'bool', [ 'pushType' => $pushType, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <push.SendTestIOS> RPC method
		* Send Test Push For IOS.
		* @param string $pushType
		* @param bool $isNotification [optional] set to true if call is notification
		* @return bool
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function push_SendTestIOS( string $pushType, $isNotification = false ): bool {
			return $this->call( __FUNCTION__, 'bool', [ 'pushType' => $pushType, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <recommendation.Get> RPC method
		* Get Recommendations.
		* @param int|null $count [optional]
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiShowRecommendation[]
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function recommendation_Get( ?int $count, $isNotification = false ): array {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiShowRecommendation[]', [ 'count' => $count, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <recommendation.Reject> RPC method
		* Reject Show.
		* @param int $id
		* @param bool $isNotification [optional] set to true if call is notification
		* @return bool
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function recommendation_Reject( int $id, $isNotification = false ): bool {
			return $this->call( __FUNCTION__, 'bool', [ 'id' => $id, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <recommendation.UndoReject> RPC method
		* Undo Reject Show.
		* @param int $id
		* @param bool $isNotification [optional] set to true if call is notification
		* @return bool
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function recommendation_UndoReject( int $id, $isNotification = false ): bool {
			return $this->call( __FUNCTION__, 'bool', [ 'id' => $id, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <shows.AdjacentEpisodes> RPC method
		* Get adjacent Episodes to a given one by its Id.
		* @param int $id
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiEpisodeSummary[]
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function shows_AdjacentEpisodes( int $id, $isNotification = false ): array {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiEpisodeSummary[]', [ 'id' => $id, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <shows.Award> RPC method
		* Get Award.
		* @param string $alias
		* @param int|null $year [optional]
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiAwardData|null
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function shows_Award( string $alias, ?int $year, $isNotification = false ): ?ApiAwardData {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiAwardData', [ 'alias' => $alias, 'year' => $year, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <shows.AwardListItems> RPC method
		* Get Award List Items.
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiAwardListItem[]
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function shows_AwardListItems( $isNotification = false ): array {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiAwardListItem[]', [ ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <shows.Cast> RPC method
		* Get show cast.
		* @param int $showId
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiRole[]
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function shows_Cast( int $showId, $isNotification = false ): array {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiRole[]', [ 'showId' => $showId, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <shows.Count> RPC method
		* Count Shows.
		* @param ApiShowSearch $search ApiShowSearch
		* @param bool $isNotification [optional] set to true if call is notification
		* @return int
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function shows_Count( ApiShowSearch $search, $isNotification = false ): int {
			return $this->call( __FUNCTION__, 'int', [ 'search' => $search, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <shows.Crew> RPC method
		* Get show crew.
		* @param int $showId
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiRole[]
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function shows_Crew( int $showId, $isNotification = false ): array {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiRole[]', [ 'showId' => $showId, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <shows.DeleteEpisodeComment> RPC method
		* Delete Comment.
		* @param int $commentId
		* @param bool $isNotification [optional] set to true if call is notification
		* @return bool
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function shows_DeleteEpisodeComment( int $commentId, $isNotification = false ): bool {
			return $this->call( __FUNCTION__, 'bool', [ 'commentId' => $commentId, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <shows.DodoPromoShows> RPC method
		* Get list of Dodo Pizza shows.
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiShowSummary[]
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function shows_DodoPromoShows( $isNotification = false ): array {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiShowSummary[]', [ ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <shows.Episode> RPC method
		* Get Episode by Id.
		* @param int $id
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiEpisode|null
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function shows_Episode( int $id, $isNotification = false ): ?ApiEpisode {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiEpisode', [ 'id' => $id, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <shows.EpisodeComments> RPC method
		* Get Episode Comments for Current User or Guest.
		* @param int $episodeId
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiUserCommentsResponse|null
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function shows_EpisodeComments( int $episodeId, $isNotification = false ): ?ApiUserCommentsResponse {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiUserCommentsResponse', [ 'episodeId' => $episodeId, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <shows.EpisodeRatings> RPC method
		* Get Ratings of Top Episodes of Show.
		* @param int $showId
		* @param int|null $seasonNumber [optional]
		* @param int $count
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiEpisodeRatingInfo[]
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function shows_EpisodeRatings( int $showId, ?int $seasonNumber, int $count, $isNotification = false ): array {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiEpisodeRatingInfo[]', [ 'showId' => $showId, 'seasonNumber' => $seasonNumber, 'count' => $count, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <shows.Filters> RPC method
		* Shows Filters.
		* @param ApiShowSearch $search ApiShowSearch
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiShowFilter[]
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function shows_Filters( ApiShowSearch $search, $isNotification = false ): array {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiShowFilter[]', [ 'search' => $search, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <shows.FirstUnwatchedEpisode> RPC method
		* Get first unwatched Episode by Show Id.
		* @param int $showId
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiEpisode|null
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function shows_FirstUnwatchedEpisode( int $showId, $isNotification = false ): ?ApiEpisode {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiEpisode', [ 'showId' => $showId, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <shows.FriendsRatedEpisode> RPC method
		* Get Friends Episode Ratings for user from context.
		* @param int $episodeId
		* @param int|null $count [optional]
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiUserRatedEpisode[]
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function shows_FriendsRatedEpisode( int $episodeId, ?int $count, $isNotification = false ): array {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiUserRatedEpisode[]', [ 'episodeId' => $episodeId, 'count' => $count, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <shows.FriendsRatedShow> RPC method
		* Get Friends Show Rating for user from context.
		* @param int $showId
		* @param int|null $count [optional]
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiUserRatedShow[]
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function shows_FriendsRatedShow( int $showId, ?int $count, $isNotification = false ): array {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiUserRatedShow[]', [ 'showId' => $showId, 'count' => $count, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <shows.Genres> RPC method
		* Get Genres.
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiGenre[]
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function shows_Genres( $isNotification = false ): array {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiGenre[]', [ ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <shows.Get> RPC method
		* Get Shows.
		* @param ApiShowSearch $search ApiShowSearch
		* @param int|null $page [optional]
		* @param int|null $pageSize [optional]
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiShowSummary[]
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function shows_Get( ApiShowSearch $search, ?int $page, ?int $pageSize, $isNotification = false ): array {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiShowSummary[]', [ 'search' => $search, 'page' => $page, 'pageSize' => $pageSize, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <shows.GetByExternalId> RPC method
		* Get Show by External Id.
		* @param int $id
		* @param string $source
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiShow|null
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function shows_GetByExternalId( int $id, string $source, $isNotification = false ): ?ApiShow {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiShow', [ 'id' => $id, 'source' => $source, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <shows.GetById> RPC method
		* Get Show by Id.
		* @param int $showId
		* @param bool|null $withEpisodes [optional]
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiShow|null
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function shows_GetById( int $showId, ?bool $withEpisodes, $isNotification = false ): ?ApiShow {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiShow', [ 'showId' => $showId, 'withEpisodes' => $withEpisodes, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <shows.GetCatalog> RPC method
		* Get Shows, Watchings and User watch statuses.
		* @param ApiShowSearch $search ApiShowSearch
		* @param int|null $page [optional]
		* @param int|null $pageSize [optional]
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiShowCatalog[]
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function shows_GetCatalog( ApiShowSearch $search, ?int $page, ?int $pageSize, $isNotification = false ): array {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiShowCatalog[]', [ 'search' => $search, 'page' => $page, 'pageSize' => $pageSize, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <shows.GetSeason> RPC method
		* Get Season.
		* @param int $showId
		* @param int $seasonNumber
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiSeason|null
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function shows_GetSeason( int $showId, int $seasonNumber, $isNotification = false ): ?ApiSeason {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiSeason', [ 'showId' => $showId, 'seasonNumber' => $seasonNumber, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <shows.Ids> RPC method
		* Get Ids.
		* @param int $fromId
		* @param int|null $count [optional]
		* @param bool $isNotification [optional] set to true if call is notification
		* @return array
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function shows_Ids( int $fromId, ?int $count, $isNotification = false ): array {
			return $this->call( __FUNCTION__, 'array', [ 'fromId' => $fromId, 'count' => $count, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <shows.MostViewed> RPC method
		* Get most viewed Shows.
		* @param int $count
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiShowSummary[]
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function shows_MostViewed( int $count, $isNotification = false ): array {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiShowSummary[]', [ 'count' => $count, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <shows.NewWatchableEpisodes> RPC method
		* Get new watchable episodes.
		* @param ApiSourceFilter[] $filters
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiOnlineEpisode[]
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function shows_NewWatchableEpisodes( array $filters, $isNotification = false ): array {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiOnlineEpisode[]', [ 'filters' => $filters, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <shows.Person> RPC method
		* Get person info.
		* @param int $personId
		* @param bool $isNotification [optional] set to true if call is notification
		* @return object|null
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function shows_Person( int $personId, $isNotification = false ): ?object {
			return $this->call( __FUNCTION__, 'object', [ 'personId' => $personId, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <shows.PostEpisodeComment> RPC method
		* Post Comment.
		* @param int $episodeId
		* @param string $text
		* @param string|null $image [optional]
		* @param int|null $parentCommentId [optional]
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiUserComment|null
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function shows_PostEpisodeComment( int $episodeId, string $text, ?string $image, ?int $parentCommentId, $isNotification = false ): ?ApiUserComment {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiUserComment', [ 'episodeId' => $episodeId, 'text' => $text, 'image' => $image, 'parentCommentId' => $parentCommentId, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <shows.PostShowChangeRequest> RPC method
		* Post change request.
		* @param int $showId
		* @param object $params
		* @param bool $isNotification [optional] set to true if call is notification
		* @return mixed
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function shows_PostShowChangeRequest( int $showId, object $params, $isNotification = false ) {
			return $this->call( __FUNCTION__, 'mixed', [ 'showId' => $showId, 'params' => $params, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <shows.Ratings> RPC method
		* Get Ratings.
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiRatings|null
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function shows_Ratings( $isNotification = false ): ?ApiRatings {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiRatings', [ ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <shows.Search> RPC method
		* Search Shows by Query.
		* @param string $query
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiShow[]
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function shows_Search( string $query, $isNotification = false ): array {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiShow[]', [ 'query' => $query, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <shows.SearchByFile> RPC method
		* Search Shows by File.
		* @param string $file
		* @param bool $isNotification [optional] set to true if call is notification
		* @return array
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function shows_SearchByFile( string $file, $isNotification = false ): array {
			return $this->call( __FUNCTION__, 'array', [ 'file' => $file, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <shows.SeasonRatings> RPC method
		* Get Season Ratings.
		* @param int $showId
		* @param int|null $seasonNumber [optional]
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiShowRating
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function shows_SeasonRatings( int $showId, ?int $seasonNumber, $isNotification = false ): ApiShowRating {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiShowRating', [ 'showId' => $showId, 'seasonNumber' => $seasonNumber, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <shows.ShowReport> RPC method
		* Get show change requests.
		* @param int $showId
		* @param bool $isNotification [optional] set to true if call is notification
		* @return object|null
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function shows_ShowReport( int $showId, $isNotification = false ): ?object {
			return $this->call( __FUNCTION__, 'object', [ 'showId' => $showId, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <shows.ShowsRatings> RPC method
		* Get Shows Ratings.
		* @param string|null $mode [optional]
		* @param int|null $count [optional]
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiShowsRatings|null
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function shows_ShowsRatings( ?string $mode, ?int $count, $isNotification = false ): ?ApiShowsRatings {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiShowsRatings', [ 'mode' => $mode, 'count' => $count, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <shows.Top> RPC method
		* Get Top Shows.
		* @param string|null $mode [optional]
		* @param int|null $count [optional]
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiShowRank[]
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function shows_Top( ?string $mode, ?int $count, $isNotification = false ): array {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiShowRank[]', [ 'mode' => $mode, 'count' => $count, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <shows.TrackEpisodeComments> RPC method
		* Track new comments for this episode or not for current user.
		* @param int $episodeId
		* @param bool $isTracked
		* @param bool $isNotification [optional] set to true if call is notification
		* @return bool
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function shows_TrackEpisodeComments( int $episodeId, bool $isTracked, $isNotification = false ): bool {
			return $this->call( __FUNCTION__, 'bool', [ 'episodeId' => $episodeId, 'isTracked' => $isTracked, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <shows.TranslateEpisodeComment> RPC method
		* Translate episode comment.
		* @param int $commentId
		* @param string|null $language [optional]
		* @param bool $isNotification [optional] set to true if call is notification
		* @return string
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function shows_TranslateEpisodeComment( int $commentId, ?string $language, $isNotification = false ): string {
			return $this->call( __FUNCTION__, 'string', [ 'commentId' => $commentId, 'language' => $language, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <shows.Trends> RPC method
		* Get Trends.
		* @param int|null $count [optional]
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiTrends|null
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function shows_Trends( ?int $count, $isNotification = false ): ?ApiTrends {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiTrends', [ 'count' => $count, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <shows.UpdateEpisodeComment> RPC method
		* Update Comment.
		* @param int $commentId
		* @param string $text
		* @param string|null $image [optional]
		* @param bool|null $deleteImage [optional]
		* @param bool $isNotification [optional] set to true if call is notification
		* @return bool
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function shows_UpdateEpisodeComment( int $commentId, string $text, ?string $image, ?bool $deleteImage, $isNotification = false ): bool {
			return $this->call( __FUNCTION__, 'bool', [ 'commentId' => $commentId, 'text' => $text, 'image' => $image, 'deleteImage' => $deleteImage, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <shows.ValidateShowChangeRequest> RPC method
		* Validate change request.
		* @param object $params
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiParamError[]
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function shows_ValidateShowChangeRequest( object $params, $isNotification = false ): array {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiParamError[]', [ 'params' => $params, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <shows.ViewEpisodeComments> RPC method
		* Mark comments as viewed for current user.
		* @param int $episodeId
		* @param bool $isNotification [optional] set to true if call is notification
		* @return bool
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function shows_ViewEpisodeComments( int $episodeId, $isNotification = false ): bool {
			return $this->call( __FUNCTION__, 'bool', [ 'episodeId' => $episodeId, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <shows.VoteAwardCategory> RPC method
		* Vote for Show in Category.
		* @param int $awardCategoryId
		* @param int $showId
		* @param bool|null $addToWatching [optional]
		* @param bool $isNotification [optional] set to true if call is notification
		* @return mixed
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function shows_VoteAwardCategory( int $awardCategoryId, int $showId, ?bool $addToWatching, $isNotification = false ) {
			return $this->call( __FUNCTION__, 'mixed', [ 'awardCategoryId' => $awardCategoryId, 'showId' => $showId, 'addToWatching' => $addToWatching, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <shows.VoteEpisodeComment> RPC method
		* Vote for episode comment.
		* @param int $commentId
		* @param bool $isPositive
		* @param bool $isNotification [optional] set to true if call is notification
		* @return int
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function shows_VoteEpisodeComment( int $commentId, bool $isPositive, $isNotification = false ): int {
			return $this->call( __FUNCTION__, 'int', [ 'commentId' => $commentId, 'isPositive' => $isPositive, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <site.Counters> RPC method
		* Get Counters.
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiSiteCounters|null
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function site_Counters( $isNotification = false ): ?ApiSiteCounters {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiSiteCounters', [ ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <site.CreateProTransaction> RPC method
		* Create Pro Transaction.
		* @param string $product
		* @param string $paymentType
		* @param bool $isNotification [optional] set to true if call is notification
		* @return string
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function site_CreateProTransaction( string $product, string $paymentType, $isNotification = false ): string {
			return $this->call( __FUNCTION__, 'string', [ 'product' => $product, 'paymentType' => $paymentType, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <site.Meta> RPC method
		* Get Meta.
		* @param string $url
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiMetaDetail|null
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function site_Meta( string $url, $isNotification = false ): ?ApiMetaDetail {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiMetaDetail', [ 'url' => $url, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <site.PaymentTypes> RPC method
		* Get Payment Types.
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiPaymentType[]
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function site_PaymentTypes( $isNotification = false ): array {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiPaymentType[]', [ ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <site.Products> RPC method
		* Get Products.
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiProduct[]
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function site_Products( $isNotification = false ): array {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiProduct[]', [ ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <site.ShowsOnline> RPC method
		* Get Online Shows.
		* @param int|null $count [optional]
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiShowSummary[]
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function site_ShowsOnline( ?int $count, $isNotification = false ): array {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiShowSummary[]', [ 'count' => $count, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <site.ShowsOnlinePromo> RPC method
		* Get Online Promo Shows.
		* @param int|null $count [optional]
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiShowSummary[]
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function site_ShowsOnlinePromo( ?int $count, $isNotification = false ): array {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiShowSummary[]', [ 'count' => $count, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <site.ShowsPopular> RPC method
		* Get Popular Shows.
		* @param int|null $count [optional]
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiShowSummary[]
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function site_ShowsPopular( ?int $count, $isNotification = false ): array {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiShowSummary[]', [ 'count' => $count, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <site.StaticPage> RPC method
		* Get Static Page.
		* @param string $url
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiStaticPage|null
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function site_StaticPage( string $url, $isNotification = false ): ?ApiStaticPage {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiStaticPage', [ 'url' => $url, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <site.TopEpisodeComments> RPC method
		* Get Top Episode Comments.
		* @param int|null $episodeCount [optional]
		* @param int|null $days [optional]
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiNewComment[]
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function site_TopEpisodeComments( ?int $episodeCount, ?int $days, $isNotification = false ): array {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiNewComment[]', [ 'episodeCount' => $episodeCount, 'days' => $days, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <users.Count> RPC method
		* Count Users.
		* @param ApiUserSearch|null $search [optional] ApiUserSearch
		* @param bool $isNotification [optional] set to true if call is notification
		* @return int
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function users_Count( ?ApiUserSearch $search, $isNotification = false ): int {
			return $this->call( __FUNCTION__, 'int', [ 'search' => $search, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <users.Filters> RPC method
		* Users Filters.
		* @param ApiUserSearch $search ApiUserSearch
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiShowFilter[]
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function users_Filters( ApiUserSearch $search, $isNotification = false ): array {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiShowFilter[]', [ 'search' => $search, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <users.Follow> RPC method
		* Follow User.
		* @param string $login
		* @param bool $isNotification [optional] set to true if call is notification
		* @return bool
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function users_Follow( string $login, $isNotification = false ): bool {
			return $this->call( __FUNCTION__, 'bool', [ 'login' => $login, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <users.Search> RPC method
		* Search Users.
		* @param ApiUserSearch|null $search [optional] ApiUserSearch
		* @param int|null $page [optional]
		* @param int|null $pageSize [optional]
		* @param bool $isNotification [optional] set to true if call is notification
		* @return ApiUser[]
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function users_Search( ?ApiUserSearch $search, ?int $page, ?int $pageSize, $isNotification = false ): array {
			return $this->call( __FUNCTION__,  __NAMESPACE__ . '\\'. 'ApiUser[]', [ 'search' => $search, 'page' => $page, 'pageSize' => $pageSize, ], $this->getRequestId( $isNotification ) );
		}
		
		/**
		* <users.UnFollow> RPC method
		* UnFollow User.
		* @param string $login
		* @param bool $isNotification [optional] set to true if call is notification
		* @return bool
		* @throws BaseJsonRpcException
		* @throws GuzzleException
		* @throws JsonMapper_Exception
		**/
		public function users_UnFollow( string $login, $isNotification = false ): bool {
			return $this->call( __FUNCTION__, 'bool', [ 'login' => $login, ], $this->getRequestId( $isNotification ) );
		}
		

        /**
         * Get Instance
         * @param $url string RPC server url
         * @return RpcClient
         */
        public static function GetInstance( $url ): RpcClient {
            return new self( $url );
        }
 	}
