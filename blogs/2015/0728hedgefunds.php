<!DOCTYPE html>

<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="Description" content="Personal blog of Roy Murdock, featuring essays and photographs. Topics are macroeconomics, finance, and technology.">

<body>

<?php include ($_SERVER["DOCUMENT_ROOT"]."/includes/header.php"); ?>

<!-- Content -->

<h1>What Purpose do Hedge Funds Serve?</h1>

<p><img src="0728hfopener.jpg" title="HFs for suckers" alt="HFsforsuckers" width="720px" /></p>

<p>Yesterday, I came across <a href="http://blog.instavest.com/the-hedge-fund-managers-who-work-for-tips">this article</a> on a new hedge fund concept: browse advice given by junior hedge fund managers for free, and if you invest (and make money, presumably) based on good advice, you have the option to tip the winning manager an amount at your discretion. The company, <a href="https://instavest.com/">Instavest</a> is backed by Y-Combinator, one of the largest and most successful startup accelerators in Silicon Valley. Instavest’s tagline promises the following: “Earn Profits. No Guesswork. Hassle Free.” Sign me up. Who couldn’t use some hassle and guess-work free profits, especially in the murky world of high-risk, high-opacity, super-leveraged derivates trading.</p>

<p>The author argues that a new tips-based hedge fund format will help combat one of the less attractive attributes of the average hedge fund: a typical fund charges a commission of 2% of the total amount of managed cash, along with a hefty 20% cut of any earnings realized on managed assets.</p>

<p>Now, this wouldn’t be too much of a problem if the average hedge fund was able to earn positive returns above that baseline 2% fee they charge for the privilege of playing with investor’s money. Unfortunately, the average hedge fund has <strong>severly</strong> underperformed the passive, “free” strategy of investing in the market (or a portfolio of safe ETF/index funds that track the overall market closely) since the financial crisis.<sup id="fnref:1"><a href="#fn:1" rel="footnote">1</a></sup> Essentially, investors are paying hedge funds to expose their assets to unorthodox strategies that lose money relative to safe, market-tracking portfolios that any basic investor can put together, beer in hand, in 30 minutes.</p>

<p>And yet, hedge funds are <a href="http://www.nytimes.com/2015/02/27/business/hedge-fund-returns-falter-yet-money-continues-to-flow-in.html">only gaining in popularity</a>.</p>

<p><img src="0728hfAUM.png" title="HF AUM" alt="HF AUM" /></p>

<p>I met a guy over the weekend who works at a hedge fund in Cambridge. I figured if anyone could tell me what hedge funds are all about, it would be him. So I asked him the following question:</p>

<blockquote><p>Why do people still pay to lose money in hedge funds?</p></blockquote>

<p>He told me (half-jokingly) that his hedge fund survives on institutional investments and that most of their clients don’t really care as long as his fund “doesn’t lose <em>too</em> much money”. So there was one part of my answer. Your average hedge-fund investor is an ultra-wealthy institutional client who needs to to reassure the board of [Private College], [Insurance Company], [Pension Fund] that a portion of the dragon’s hoarde of treasures is being looked after by some smart, old guy.</p>

<p>Still, that doesn’t sit perfectly well with me. I think there's a bit more to the hedge fund craze.</p>

<hr>

<h2>Random Walk &amp; Strong Form Efficiency</h2>

<p><img src="0728hfwalk.jpg" title="hfwalk" alt="hfwalkf" /></p>

<p class="caption">GOOG or weighted coin toss?</p>

<p>If you take any finance class anywhere in the world, you are bound to come across the <strong>random walk (with drift)</strong> hypothesis and the <strong>efficient markets</strong> hypothesis.</p>

<p>The <strong>random walk with drift</strong> hypothesis posits that the stock market moves in a stochastic (random) fashion in the short run, but that it “drifts” upwards in the long run. This means that it’s impossible to predict future values based on historical data, and that spending time and energy actively picking stocks will not earn you a return higher than the return on passive, steadily-appreciating market portfolio.</p>

<p>The random walk theory is a somewhat generalized version of the <strong>efficient markets</strong> hypothesis, which states that in a <strong>strong form efficient</strong> market, it is impossible to beat the market because every single piece of information relevant to the value of every single stock has already been priced in. Thus, every stock is worth exactly what it should be at all times, and an investor can never be “ahead” of the market.</p>

<p>The stock markets are most definitely not strong form efficient, as investors are not purely rational beings that trade on perfect information. But the markets are notoriously hard to beat for an extended period of time (see <strong>semi-strong form</strong> efficiency). And, theoretically, the difficulty of beating the market should only be <em>increasing</em> as the flow of information becomes quicker and broader, the volume of trades (especially algorithmic, machine-executed trades) increases, and an ever-increasing number of investors enter the market.</p>

<p>The only way to reconcile these hypotheses with the continued, and in recent months, increasingly feverish hunt for hedge fund <strong>alpha</strong> (a fancy finance term for above-market profit) is through differences in information – what many would consider “insider trading”. In an efficient market, funds that consistently outperform the market are either 1 in a million lucky (how do you choose this firm as an investor? you can’t), or they trade on information that others do not have access to.</p>

<hr>

<h2>Informational Asymmetry</h2>

<p><img src="0728allowance.gif" title="allowance" alt="allowance" /></p>

<p>Insider information is the only logical reason to invest in a hedge fund <strong>during a bull market</strong>. Pick the fund with the managers who are buddies with Janet Yellen, go golfing with fortune 500 CEOs on the weekends, and vacation in Europe with French politicians. Just hope that they aren't the 1/100 that the government decides to make an example out of, or that they can pay for a really good lawyer (which they usually can). Otherwise, as most of my professors have advised, you should just invest in a portfolio of ETFs and only pick stocks for fun with money you aren’t afraid to lose.</p>

<p>Some have argued the following:</p>

<blockquote><p>I think you raise a few good issues but I’d like to poke, lightly, at the idea that the only information advantage available to hedge funds is “insider” information. Certainly some successful firms built their track record with illegal insider trading that but that’s not the whole story.</p>

<p>They have better access to research, they have better access to the analysts whose opinions help drive public understanding of the company, they have better access to management to ask clarifying questions on areas of concern. They spend every day steeped in the facts, perceptions, and research that are relevant to investing. In short, they have a massive information advantage over a casual investor or day-trader. This does not, necessarily, mean they’re trading on “insider” information.
Finally, just to clarify, insider trading is often misunderstood. A violation depends on meeting all of the following criteria:</p>

<ol>
<li>The information is material,</li>
<li>The information is non-public,</li>
<li>There was a breach of duty in sharing or trading on the information.</li>
</ol>

<p>As an oversimplification: if Joe overhears a conversation between the CFO of a Fortune500 company and his boss talking about losing a major contract...only the first two criteria are satisfied and Joe can buy/trade without fear of prosecution.<sup id="fnref:2"><a href="#fn:2" rel="footnote">2</a></sup></p></blockquote>

<p><strong>—<a href="https://news.ycombinator.com/user?id=dkfmn">dkfmn</a> on Hackernews</strong></p>

<p>I agree that hedge fund managers have a massive information advantage over the casual investor, as this is their job. My argument is not hedge fund vs. casual investor, it’s hedge fund vs. hedge fund.</p>

<p>These guys are all equally-intelligent individuals with the same prestigious degrees and expensive equipment. There are thousands of them entering the hedge fund game every year. The only differentiating factor in this saturated market is network strength.</p>

<p>I’m also not arguing the legality of trading on insider information either. The laws are notoriously unclear, hard to enforce, and subsequently broken because information is harder to track than money, blood, and drugs. At the end of the day I would appeal to an ethical duty not to impoverish one’s fellow man and rend the fabric of the society that brought one up, rather than the flimsy and unenforceable definitions set forth in the legal code.</p>

<hr>

<h2>Popularity of Hedge Funds as a Proxy for Market Sentiment</h2>

<p>There is one other idea that I’d like to put forth: in the current market, the amount of money that is being invested in hedge funds is strongly correlated with <strong>bearish investor sentiments</strong>. In other words, institutional investors are becoming increasingly scared and uncertain; they are willing to pay financial wizards to lose money relative to the market because they <em>are scared of an imminent crash </em>and they believe that a hedge fund will be able to predict and outmaneuver other active managers if this happens, or at least have some kind of stopgap solution in place in the event of a financial meltdown. After all, this is what “hedging” refers to – protecting a portfolio against sharp/sudden losses.</p>

<p><img src="0728hfsources.png" title="hedge fund sources" alt="hedge fund sources" /></p>

<p>Post-crisis, institutional asset managers want to be able to turn to the board of their respective institutions and say, ‘Well you can’t blame me, I put our money in a <strong>bona fide hedge fund</strong>! Do you have any idea how expensive that was? Those guys were supposed to be geniuses. I did all I could. Definitely not my fault. In fact, I should probably get a bonus.’ Hedge funds are a mechanism by which they can wash their hands of all guilt in the event of losses sustained during a financial downturn.</p>

<p>Let’s look at an example: In 2008, hedge funds returned -18.3%, compared to the S&amp;P’s abysmal return of -37% due to the financial crisis.<sup id="fnref:3"><a href="#fn:3" rel="footnote">3</a></sup> That was the last time hedge funds, on average, have outperformed the market – 7 years ago.</p>

<hr>

<h2>Conclusion</h2>

<p>In conclusion: there are only two logical reasons for the continued popularity and growth of the amount of assets under management by hedge funds:</p>

<ol>
<li>Investors believe that the hedge funds that they have chosen are managed by individuals who have access to insider information; this will allow the fund to generate a return well-above the average hedge fund, which has underperformed passive management for the past 7 years.</li>
<li>Institutional investors want to put money into an investment vehicle that has the reputation for being super-actively managed by financial gurus because they intuit a looming financial precipice behind the nebulous activity of the strange and “unique” stock market that is propped up by an increasingly tense global economy.</li>
</ol>

<hr>

<h2>Rebuttal</h2>

I have to add this <a href="https://www.reddit.com/r/Economics/comments/3coe0t/why_do_hedge_funds_continue_to_exist/">rebuttal</a> from Reddit user <a href="https://www.reddit.com/user/BeatArmy99">BeatArmy99</a> because it's just so damn good:

<hr>

<p>These comments are typical of an individual who possesses two things:</p>
<ul>
<li> A cursory understanding of the capital markets and asset management, and;</li>
<li> An inability to admit it.</li>
</ul>

<p>There are so many ways to approach this I can't even think of where to begin, but I'll give it a shot.</p>

<p><i>"...massively underperforms the stock market..."</i></p>

<p>I think that about sums it up. The totality of the equity markets (of which the U.S. comprises 52%) is $46.8 trillion (this is from Dimensional's 2015 Matrix Book). The totality of the world's fixed income markets is $36.6 trillion. Thus, only 28% of "traditional" (equity or fixed income) assets are tied directly to "the stock market" as you are characterizing it.</p>

<p>The $83.4 trillion worth of traditional markets doesn't even begin to describe the world of currencies, commodities, or real assets (such as land). At this point, the total value of the world's financial assets has likely overtaken $200 trillion. So in that context, U.S. stocks represent just 12% of the world's total financial assets.</p>

<p>"Hedge funds" are, by and large, not some fly-by-night stock jockey operation where kids play "draw the line on the chart" all day long. "Hedge fund" is a catch-all term for a myriad of strategies which generally share only one thing - that they are not "traditional" long-only equity or fixed income investments. They typically involve many strategies of widely varying stripes across every asset class and financial instrument on the planet.
Now, imagine that you're the manager of $50 billion in institutional assets. Do you think that you can jump on to /r/investing, get some advice and plunk 50% of that money into "VTI," another 25% into "VTSX," and the last 25% into "BND"? You're kidding yourself. It would never fly. Do you think the sovereign wealth funds of Singapore or Norway sit back and pour their money into some "low cost index funds"? Of course not - and it isn't because they aren't as smart as the tools here on /r/economics or /r/investing.</p>

<p>Real institutional asset management involves what's known as the "science of finance." That will be a foreign term to many here, unless of course you're the sort who understands that outside of all the smoke and mirrors of economics, there is actually some science behind that as well. The science of asset management recognizes the uncertainty of the world, the importance of real diversification (not "80% stocks, 20% bonds"), asset-liability management, etc. It involves the confluence of many disciplines in an attempt to earn reasonable real risk-adjusted returns on accumulated capital.
Hedge funds simply exist to fill the role of a manager when a large asset manager can't bring that sort of thing in house. Not every organization can be PIMCO or Blackrock, housing economists from multiple disciplines to actively oversee disparate investments across the globe. If I want an emerging market credit fund, there isn't some low-cost Vanguard index I can buy that will soak up my $1B of money effectively. I need to spread it around.
When people like the author of this article ask "why are hedge funds still around," they typically come after they lump together a dozen different strategies and compare them ex post facto against the performance of the S&P 500, saying "see, if these people had just done this they would have done better." It's laughable on its face.</p>

<p>TL;DR: If you use the S&P 500 as a proxy against which to measure "hedge funds," you're an idiot.</p>

<hr>

<h2>Footnotes</h2>
<div class="footnotes">
<hr/>
<ol>
<li id="fn:1">
<p>According to the Instavest article: ‘last year the average hedge fund made 3.3%; S&amp;P 500 index gained 11.4%.’ Similar story over the past 7 years.<a href="#fnref:1" rev="footnote">&#8617;</a></p></li>
<li id="fn:2">
<p>See <a href="http://www.dallasnews.com/business/headlines/20131013-cuban-case-has-parallels-to-switzers-30-years-ago.ece">this article</a> for the hilarious (and real) version of the Joe story, in which a football coach meets with some CEO at a stadium, then decides to lie down on the bleachers behind him to get a tan, all the while nonchalantly listening as the CEO tells his wife of an impending company catastrophe. The coach and his buddies short the stock the next day and make a killing, but it&rsquo;s all good and legal because there was no breach of duty! Funny what a tan can do for a man.<a href="#fnref:2" rev="footnote">&#8617;</a></p></li>
<li id="fn:3">
<p>See this <a href="http://www.marketfolly.com/2009/01/2008-hedge-fund-performance-numbers.html">market folly</a> post.<a href="#fnref:3" rev="footnote">&#8617;</a></p></li>
</ol>
</div>

<!-- Footer -->

<hr>

<?php include ($_SERVER["DOCUMENT_ROOT"].'/includes/footer.php'); ?>

</body>

</html>
