# Kanyerest SDK feature factory

from kanyerest_sdk.feature.base_feature import KanyerestBaseFeature
from kanyerest_sdk.feature.test_feature import KanyerestTestFeature


_FEATURES = {
    "base": lambda: KanyerestBaseFeature(),
    "test": lambda: KanyerestTestFeature(),
}


def _make_feature(name):
    factory = _FEATURES.get(name)
    if factory is not None:
        return factory()
    return _FEATURES["base"]()


# True when this SDK was generated with the named feature class - the
# constructor's tolerance for extend-carried features reads this (an
# active name with no generated class must not become a BaseFeature
# stray when an extend instance carries it).
def _has_feature(name):
    return name in _FEATURES
