# Kanyerest SDK feature factory

require_relative 'feature/base_feature'
require_relative 'feature/test_feature'


module KanyerestFeatures
  def self.make_feature(name)
    case name
    when "base"
      KanyerestBaseFeature.new
    when "test"
      KanyerestTestFeature.new
    else
      KanyerestBaseFeature.new
    end
  end
end
