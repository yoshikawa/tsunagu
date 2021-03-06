// State of your app
const state = {
    me: {},
    feed: [],
    profilePage: {
        profile: {
            bio: ''
        },
        avatar: '',
        username: '',
        tweets: [],
        is_following: false
    },
    tweetDetail: {
        user: {},
        replies: []
    },
    openTweetDetails: null,
    followSuggestions: [],
    isLoading: false,
    appName: 'tsunagu'
}

export default state;