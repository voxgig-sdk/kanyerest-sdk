# Kanyerest SDK feature factory

from kanyerest_sdk.feature.base_feature import KanyerestBaseFeature
from kanyerest_sdk.feature.test_feature import KanyerestTestFeature


def _make_feature(name):
    features = {
        "base": lambda: KanyerestBaseFeature(),
        "test": lambda: KanyerestTestFeature(),
    }
    factory = features.get(name)
    if factory is not None:
        return factory()
    return features["base"]()
