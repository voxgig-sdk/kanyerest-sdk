# Kanyerest SDK feature factory

require_relative 'feature/base_feature'
require_relative 'feature/ratelimit_feature'
require_relative 'feature/retry_feature'
require_relative 'feature/test_feature'
require_relative 'feature/timeout_feature'


module KanyerestFeatures
  def self.make_feature(name)
    case name
    when "base"
      KanyerestBaseFeature.new
    when "ratelimit"
      KanyerestRatelimitFeature.new
    when "retry"
      KanyerestRetryFeature.new
    when "test"
      KanyerestTestFeature.new
    when "timeout"
      KanyerestTimeoutFeature.new
    else
      KanyerestBaseFeature.new
    end
  end
end
