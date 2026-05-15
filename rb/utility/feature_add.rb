# Kanyerest SDK utility: feature_add
module KanyerestUtilities
  FeatureAdd = ->(ctx, f) {
    ctx.client.features << f
  }
end
