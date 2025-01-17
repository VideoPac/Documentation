<?php
include(DOCS_RESOURCES."/brokerages/security-and-stability.php");
$getBrokerageStabilityText("IB", "https://www.interactivebrokers.com/en/software/systemStatus.php");
?>

<h4>Connections</h4>
<p>IB only supports 1 connection at a time to your account. If you interfere with your brokerage account while an algorithm is connected to it, the algorithm may stop executing. To run more than 1 algorithm, <a rel="nofollow" target="_blank" href="https://www.interactivebrokers.com.hk/en/software/ptgstl/topics/ptgsubaccounts.htm">open an IB subaccount</a> for each additional algorithm.</p>

<h4>SMS 2FA</h4>
<p>Our IB integration doesn't support Two-Factor Authentication (2FA) via SMS. Use the <a rel="nofollow" target="_blank" href="https://guides.interactivebrokers.com/iphone/log_in/ibkey.htm?tocpath=IB%20Key%20Security%20Protocol%7C_____0">IB Key Security via IBKR Mobile</a> instead.</p>

<h4>System Resets</h4>
<p>If your IB account has 2FA enabled, you'll need to re-authenticate once a week. The reset schedule is available on the <a rel="nofollow" target="_blank" href="https://www.interactivebrokers.com/en/software/systemStatus.php">IB Status page</a>. If you miss the timeout period, your algorithm quits executing.</p>
